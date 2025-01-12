<?php

/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 *
 * US English message token translations for the 'RegSevak' sprinkle.
 *
 * @package userfrosting\i18n\en_US
 * @author Alexander Weissman
 */

use UserFrosting\Sprinkle\CRUD\Controller\CRUDUtilityController as CRUDUtil;

$lModels = [
    'cm_content' => 'Content'
];

$languageArr = [];
//$languageArr = CRUDUtil::getUSLanguageArr($lModels);
$languageArr["CONTENT"] = [
    "1" => "Content",
    "2" => "Content",
    "ADD_NEW" => "Add New Content",
    "CREATE" => "Create Content",
    "CREATED" => "Content for <strong>{{name}}</strong> has been successfully created",
    "CREATION_SUCCESSFUL" => "Content for <strong>{{name}}</strong> has been successfully created",
    "UPDATE" => "Modify Content Record",
    "UPDATED" => "Content updated successfully",
    "UPDATE_SUCCESSFUL" => "Content for <strong>{{name}}</strong> has been successfully updated",
    "DETAILS_UPDATED" => "Content details updated for member <strong>{{name}}</strong>",
    "DELETE" => "Delete Content",
    "DELETE_CONFIRM" => "Are you sure you want to delete : Content <strong>{{name}}</strong>?",
    "DELETE_YES" => "Yes, delete Content",
    "DELETED" => "Content <strong>{{name}}</strong> deleted",
    "DELETION_SUCCESSFUL" => "Content <strong>{{name}}</strong> has been successfully deleted.",
    "DISABLE" => "Disable Content",
    "DISABLE_SUCCESSFUL" => "Content record has been successfully disabled.",
    "DISABLE_FAILED" => "Failed to disable Content record.",
    "EDIT" => "Edit Content",
    "ENABLE" => "Enable Content",
    "ENABLE_SUCCESSFUL" => "Content record has been successfully enabled.",
    "ENABLE_FAILED" => "Failed to enable Content record.",
    "INFO_PAGE" => "Content information page for {{name}}",
    "LATEST" => "Latest Content data",
    "PAGE_DESCRIPTION" => "Provides management tools to manage Content data including the ability to list, edit details, enable/disable, and more.",
    "SUMMARY" => "Content Summary",
    "VIEW_ALL" => "View all Content data",
    "LIST_TITLE" => "Content Records",
    "C" => [
        "ID" => "Id",
        "USER_ID" => "User Id",
        "PUBLISH_DATE" => "Publish Date",
        "ARCHIVE_DATE" => "Archive Date",
        "TYPE" => "Type",
        "TOPIC" => "Topic",
        "BODY" => "Body",
        "TAGS" => "Tags",
        "STATUS" => "Status",
        "CREATED_BY" => "Created By",
        "UPDATED_BY" => "Updated By",
        "CREATED_AT" => "Created At",
        "UPDATED_AT" => "Updated At",
        "DELETED_AT" => "Deleted At"
    ]
];
$languageArr['PASSWORD']['CHANGE'] = 'I want to Change my Password';
$languageArr['CLICK_HERE_TO_EXPAND']='Click here to expand';

return $languageArr;