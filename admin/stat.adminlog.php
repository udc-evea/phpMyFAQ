<?php
/**
 * Overview of actions in the admin section
 *
 * PHP Version 5.3
 *
 *  http://www.mozilla.org/MPL/
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at http://mozilla.org/MPL/2.0/.
 *
 * @category  phpMyFAQ
 * @package   Administration
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @copyright 2003-2014 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      http://www.phpmyfaq.de
 * @since     2003-02-23
 */

if (!defined('IS_VALID_PHPMYFAQ')) {
    $protocol = 'http';
    if (isset($_SERVER['HTTPS']) && strtoupper($_SERVER['HTTPS']) === 'ON'){
        $protocol = 'https';
    }
    header('Location: ' . $protocol . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']));
    exit();
}

$logging = new PMF_Logging($faqConfig);

if ($permission['adminlog'] && 'adminlog' == $action) {

    $date    = new PMF_Date($faqConfig);
    $perpage = 15;
    $pages   = PMF_Filter::filterInput(INPUT_GET, 'pages', FILTER_VALIDATE_INT);
    $page    = PMF_Filter::filterInput(INPUT_GET, 'page' , FILTER_VALIDATE_INT, 1);
    
    if (is_null($pages)) {
        $pages = round(($logging->getNumberOfEntries() + ($perpage / 3)) / $perpage, 0);
    }
    
    $start = ($page - 1) * $perpage;
    $ende  = $start + $perpage;

    $baseUrl = sprintf(
        '%s?action=adminlog&amp;page=%d',
        PMF_Link::getSystemRelativeUri(),
        $page
    );

    // Pagination options
    $options = array(
        'baseUrl'         => $baseUrl,
        'total'           => $logging->getNumberOfEntries(),
        'perPage'         => $perpage,
        'pageParamName'   => 'page'
    );
    $pagination = new PMF_Pagination($faqConfig, $options);

    $loggingData = $logging->getAll();
?>
    <header>
        <h2>
            <i class="icon-tasks"></i> <?php echo $PMF_LANG["ad_menu_adminlog"]; ?>
            <div class="pull-right">
                <a class="btn btn-danger" href="?action=deleteadminlog">
                    <i class="icon-trash"></i> <?php echo $PMF_LANG['ad_adminlog_del_older_30d'] ?>
                </a>
            </div>
        </h2>
    </header>

    <table class="table table-striped">
    <thead>
        <tr>
            <th><?php echo $PMF_LANG["ad_categ_id"]; ?></th>
            <th><?php echo $PMF_LANG["ad_adminlog_date"]; ?></th>
            <th><?php echo $PMF_LANG["ad_adminlog_user"]; ?></th>
            <th colspan="2"><?php echo $PMF_LANG["ad_adminlog_ip"]; ?></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="5"><?php echo $pagination->render(); ?></td>
        </tr>
    </tfoot>
    <tbody>
<?php
    $counter = $displayedCounter = 0;

    foreach ($loggingData as $logging_id => $logging_value) {

        if ($displayedCounter >= $perpage) {
            $displayedCounter++;
            continue;
        }

        $counter++;
        if ($counter <= $start) {
            continue;
        }
        $displayedCounter++;
        
        $user->getUserById($logging_value['usr']);
?>
        <tr>
            <td><?php echo $logging_id; ?></td>
            <td><?php echo $date->format(date('Y-m-d H:i', $logging_value['time'])); ?></td>
            <td><?php echo $user->getLogin(); ?></td>
            <td><?php echo $logging_value['ip']; ?></td>
            <td><small><?php
            $text = $logging_value['text'];
            $text = str_replace("Loginerror", $PMF_LANG["ad_log_lger"], $text);
            $text = str_replace("Session expired", $PMF_LANG["ad_log_sess"], $text);
            $text = str_replace("Useredit, ", $PMF_LANG["ad_log_edit"], $text);
            $text = str_replace("Beitragcreatesave", $PMF_LANG["ad_log_crsa"], $text);
            $text = str_replace("Beitragcreate", $PMF_LANG["ad_log_crea"], $text);
            $text = str_replace("Usersave, ", $PMF_LANG["ad_log_ussa"], $text);
            $text = str_replace("Userdel, ", $PMF_LANG["ad_log_usde"], $text);
            $text = str_replace("Beitragedit, ", $PMF_LANG["ad_log_beed"], $text);
            $text = str_replace("Beitragdel, ", $PMF_LANG["ad_log_bede"], $text);
            echo $text; ?></small>
            </td>
        </tr>
<?php
    }
?>
    </tbody>
    </table>

<?php
} elseif ($permission['adminlog'] && 'deleteadminlog' == $action) {

    if ($logging->delete()) {
        printf('<p class="alert alert-success">%s</p>', $PMF_LANG['ad_adminlog_delete_success']);
    } else {
        printf('<p class="alert alert-error">%s</p>', $PMF_LANG['ad_adminlog_delete_failure']);
    }
} else {
    echo $PMF_LANG["err_NotAuth"];
}
