<?php
/**
* @version 1.1.x
* @package nBill
* @copyright (C) 2006-2007 Netshine Software Limited
* @copyright Translation 2009 Joomla! i Norge
* @license Commercial
* 
* PLEASE NOTE: This is NOT free software. You must purchase a license in order to use this component.
* For more information, see www.nbill.co.uk
*
* All Rights Reserved. You may make amendments to any unencrypted files for your own use only or
* for the use of your customers if you are a website developer. HOWEVER, you are not permitted to
* re-distribute or re-sell this software in any form without the express permission of the copyright 
* holder. This software is NOT open source.
*
* This component was developed by Netshine Software Limited (www.netshinesoftware.com). Use of this
* software is entirely at your own risk.
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Order Forms
define("INV_ORDER_FORMS_TITLE", "Order Forms");
define("INV_ORDER_FORMS_INTRO", "Order forms allow your users to order products through your website front end. You can have whatever fields you like on a form, and associate one or more of the fields with one or more products (you can cause a different product to be ordered depending on the value a user enters for a field). When using this feature for the first time, please refer to the %s");
define("INV_ORDER_FORMS_DOC_LINK", "online documentation.");
define("INV_FORM_PUBLISHED", "Published?");
define("INV_INSTR_FORM_PUBLISHED", "Whether or not to display this form on the website front end");
define("INV_FORM_TITLE", "Form Title");
define("INV_PUBLISHED", "Published");
define("INV_EDIT_ORDER_FORM", "Edit Order Form");
define("INV_NEW_ORDER_FORM", "New Order Form");
define("INV_FORM_DETAILS", "Form Details");
define("INV_ORDER_FORM_INTRO_NEW", "As this is a new form, the first tab below allows you to enter the basic details. After you click on 'Apply' (or 'Save' and then come back into the form to edit it) the 'Fields' tab will be the first one (because that is the tab you are most likely to need to update).");
define("INV_ORDER_FORM_INTRO", "");
define("INV_FORM_TAB_DETAILS", "Details");
define("INV_FORM_TAB_FIELDS", "Fields");
define("INV_FORM_TAB_ORDER_VALUES", "Order");
define("INV_FORM_TAB_ADVANCED", "Advanced");
define("INV_INSTR_FORM_TITLE", "The name of the order form.");
define("INV_FORM_INTRO", "Introduction");
define("INV_INSTR_FORM_INTRO", "This is the introductory content that will appear before the form fields. Use this to give any instructions about filling in the form.");
define("INV_FORM_FOOTER", "Footer");
define("INV_INSTR_FORM_FOOTER", "Text to display after the form fields.");
define("INV_FORM_BORDER", "Table Border?");
define("INV_INSTR_FORM_BORDER", "Whether or not to display a border round the table cells for the form.");
define("INV_FORM_LOGGED_IN_ONLY", "Logged-in Users Only?");
define("INV_INSTR_FORM_LOGGED_IN_ONLY", "Whether to restrict this order form to be available only to users who have logged in.");
define("INV_FORM_PREREQ_PRODUCTS", "Prerequisite Products");
define("INV_INSTR_FORM_PREREQ_PRODUCTS", "If the user must already have a certain product before they can use this order form (eg. for an upgrade), specify the prerequisite product(s) here. If more than one product is selected, the user will be able to access this order form if they already have ANY one of the prerequisite products.");
define("INV_FORM_PREREQ_CATS", "Categories");
define("INV_FORM_PREREQ_CAT_PROD", "Products");
define("INV_FORM_PREREQ_SELECTED_PROD", "Selected Product(s)");
define("INV_FORM_EMAIL_CLIENT", "E-Mail Confirmation to Client?");
define("INV_INSTR_FORM_EMAIL_CLIENT", "Whether to send the client a confirmation e-mail when the form is submitted.");
define("INV_FORM_EMAIL_ADMIN_PENDING", "E-Mail Pending Order to Admin?");
define("INV_INSTR_FORM_EMAIL_ADMIN_PENDING", "Whether to send the administrator a confirmation e-mail when a PENDING order is created.");
define("INV_FORM_EMAIL_ADMIN", "E-Mail Order to Admin?");
define("INV_INSTR_FORM_EMAIL_ADMIN", "Whether to send the administrator a confirmation e-mail when an order is created.");
define("INV_FORM_VALIDATION_CODE", "Validation Code");
define("INV_INSTR_FORM_VALIDATION_CODE", "PHP code to evaluate when validating the submitted form. Assign a value to \$error_message to reject the form submission. Add the field name(s) of the fields that failed validation to the \$fields_in_error[] array to have those fields highlighted when the form is re-displayed. If that doesn't make sense to you, just leave this blank.");
define("INV_FORM_PROCESS_CODE", "Process Code");
define("INV_INSTR_FORM_PROCESS_CODE", "PHP code to evaluate when the form is posted back but not submitted (eg. if you have your own custom button on the form which needs to look something up or perform some other process). If that doesn't make sense to you, just leave this blank.");
define("INV_FORM_SUBMIT_CODE", "Submit Code");
define("INV_INSTR_FORM_SUBMIT_CODE", "PHP code to evaluate when the form is submitted and has passed validation successfully. If that doesn't make sense to you, just leave this blank.");
define("INV_FORM_PENDING_UNTIL_PAID", "Pending Until Paid?");
define("INV_INSTR_FORM_PENDING_UNTIL_PAID", "Whether to create a PENDING order (not a real one) when the form is submitted. Pending orders can be activated by an administrator, or by a payment gateway extension (when it detects that payment has been successful). Recommended to set this to `yes` so that you only get order records for items that have been paid for.");
define("INV_FORM_AUTO_CREATE_ORDERS", "Auto Create Order(s)?");
define("INV_INSTR_FORM_AUTO_CREATE_ORDERS", "Whether or not to automatically create order records when the form is submitted. If 'Pending Until Paid' is set to 'Yes', this will only happen after online payment has been completed - subject to payment gateway supporting this feature - or when the pending order is activated by an administrator.");
define("INV_FORM_AUTO_CREATE_USER", "Auto Create User?");
define("INV_INSTR_FORM_AUTO_CREATE_USER", "Whether or not to automatically attempt to create a user record for the new client when any orders for the form are activated (if applicable). If 'Pending Until Paid' is set to 'Yes', this will only happen after online payment has been completed - subject to payment gateway supporting this feature - or when the pending order is activated by an administrator.");
define("INV_FORM_AUTO_CREATE_INVOICE", "Auto Create Invoice?");
define("INV_INSTR_FORM_AUTO_CREATE_INVOICE", "Whether or not to automatically generate an invoice for the order when any orders for the form are activated. If 'Pending Until Paid' is set to 'Yes', this will only happen after online payment has been completed - subject to payment gateway supporting this feature - or when the pending order is activated by an administrator.");
define("INV_FORM_AUTO_CREATE_INCOME", "Auto Create Income Item?");
define("INV_INSTR_FORM_AUTO_CREATE_INCOME", "Whether or not to automatically generate an income record for the payment. This will only happen after online payment has been completed, subject to payment gateway supporting this feature.");
define("INV_PAYMENT_GATEWAY", "Payment Gateway");
define("INV_INSTR_PAYMENT_GATEWAY", "Select the payment gateway to direct to after the form is submitted (NOTE: This can be overridden by a form field [eg. if you want to allow the user to select a payment gateway from a list] or using the value on the 'Order' tab).");
define("INV_ORDER_VALUES_INTRO", "There are certain values that need to be populated in order to create a new order. These values can either be defined explicitly by an administrator (by typing values directly in the boxes below), or they can be picked up from the values entered by the end user when they fill in the form. To pick up values from the form, you can specify which form field relates to which value on the 'Fields' tab (by editing the field in question, and selecting an order value from the dropdown list). Alternatively, you can use a token value here in the format ##field_id##, where field_id is the id number of the field that holds the value (see the 'id' column on the field list on the 'Fields' tab).");
define("INV_FORM_RELATING_TO", "Relating to");
define("INV_INSTR_FORM_RELATING_TO", "Either a static value for what the order relates to, or a token representing a field value (eg. ##23##).");
define("INV_FORM_CARRIAGE_ID", "Carriage ID");
define("INV_INSTR_FORM_CARRIAGE_ID", "Either a static value for the carriage service to use (the ID number as displayed on the %s, not the name), or a token representing a field value (eg. ##23##).");
define("INV_CARRIAGE_LIST", "carriage list");
define("INV_FORM_TAX_EXEMPTION_CODE", "Tax Exemption Code");
define("INV_INSTR_FORM_TAX_EXEMPTION_CODE", "Either a static value to enter as the tax exemption code (unlikely to be useful!), or a token representing a field value (eg. ##23##).");
define("INV_FORM_PAYMENT_FREQUENCY", "Payment Frequency Code");
define("INV_INSTR_FORM_PAYMENT_FREQUENCY", "Either a static CODE value for the payment frequency ('AA'=One-off; 'BB'=Weekly; 'BX'=Four-weekly; 'CC'=Monthly; 'DD'=Quarterly; 'DX'=Semi-annually; 'EE'=Annually; 'FF'=Biannually; 'GG'=5-Yearly; 'HH'=10-Yearly; 'XX'=Not Applicable), or a token representing a field value (eg. ##23##).");
define("INV_FORM_CURRENCY", "Currency");
define("INV_INSTR_FORM_CURRENCY", "Either a static value for the currency (eg. GBP; USD) or a token representing a field value (eg. ##23##). If left blank, the component will try to use the vendor's default currency.");
define("INV_FORM_UNIQUE_INVOICE", "Unique Invoice?");
define("INV_INSTR_FORM_UNIQUE_INVOICE", "Either a static value to indicate whether the order should always have its own unique invoice (0 for 'No', 1 for 'Yes'), or a token representing a field value (eg. ##23##).");
define("INV_FORM_SHOW_SUMMARY", "Show Summary?");
define("INV_INSTR_FORM_SHOW_SUMMARY", "Whether or not to display a confirmation screen before submitting the form (to give the user a chance to spot any data entry errors and go back and change them). NB. This is a legal requirement in the UK!");
define("INV_FORM_CAPTURE_CLIENT_DATA", "Capture Client Data?");
define("INV_INSTR_CAPTURE_CLIENT_DATA", "Whether or not to request client name and address. If this is set to 'no', it will not be possible to produce any invoices or redirect to a payment gateway. Setting this to 'no' therefore turns this into a plain form with no real integration with " . INV_BRANDING_NAME . " (useful perhaps for free trials where you don't want to bill anyone, or for enquiry forms etc.) WARNING! If you set this to 'no', but want the form contents to be e-mailed to you, you must write your own 'submit code' on the 'Advanced' tab to do this (sample code is available on the " . INV_BRANDING_NAME . " website).");
define("INV_FORM_AUTO_RENEW", "Auto Renew?");
define("INV_INSTR_FORM_AUTO_RENEW", "Either a static value to indicate whether or not to automatically renew the order at the end of each payment cycle, or a token representing a field value (eg. ##23##). Enter 1 for 'yes', or 0 for 'no' (if this is set to 0, the order will be treated as a one-off payment [but using the price from the relevant payment frequency] and no recurring invoices will be generated, nor will any recurring payments be taken - the user will need to make the next payment manually in order to renew. Use the reminders feature if you want a reminder and payment link to be sent to the user at renewal time)."); 
define("INV_FORM_EXPIRY_DATE", "Expiry Date (%s)");
define("INV_INSTR_FORM_EXPIRY_DATE", "Either a static value to indicate the date on which the order will expire, or a token representing a field value (eg. ##23##). If left blank, the order will not expire. Use the format %s. PLEASE NOTE: Not all payment gateways support expiry dates. If your payment gateway does not support expiry dates, you will need to cancel the payments with the PSP yourself. Use the reminders feature if you want to receive e-mail notification of an expiry.");

//Fields
define("INV_FORM_FIELDS_INTRO", "These are the individual controls that will be displayed on the form (text boxes, dropdown lists, option buttons, etc).");
define("INV_FORM_FIELD_ID", "ID");
define("INV_FORM_FIELD_TYPE", "Type");
define("INV_FORM_FIELD_NAME", "Name");
define("INV_FORM_FIELD_LABEL", "Label");
define("INV_FORM_FIELD_SUFFIX", "Checkbox Label");
define("INV_FORM_FIELD_REQUIRED", "Required");
define("INV_FORM_FIELD_NOT_REQUIRED", "Not Required");
define("INV_FORM_FIELD_ORDERING", "Order");
define("INV_FORM_FIELD_PUBLISHED", "Published");
define("INV_FORM_FIELD_UNPUBLISHED", "Not Published");
define("INV_FORM_FIELD_MORE", "More");
define("INV_FORM_FIELD_EDIT", "Edit...");
define("INV_FORM_FIELD_OPTIONS", "Options...");
define("INV_FORM_FIELD_DELETE", "Delete");
define("INV_FORM_FIELD_EDIT_FIELD", "Edit Field");
define("INV_FORM_FIELD_EDITING_INTRO", "Enter values for the field properties here. Hover over the blue info icon for help about what each property means.");
define("INV_FORM_FIELD_EDIT_ATTRIBUTES", "HTML Attributes");
define("INV_FORM_FIELD_EDIT_DEFAULT_VALUE", "Default Value");
define("INV_FORM_FIELD_EDIT_PRE_FIELD", "Pre-Field");
define("INV_FORM_FIELD_EDIT_POST_FIELD", "Post-Field");
define("INV_FORM_FIELD_EDIT_HELP_TEXT", "Help Text");
define("INV_FORM_FIELD_EDIT_RELATED_PRODUCT_CAT", "Related Product Category");
define("INV_FORM_FIELD_EDIT_RELATED_PRODUCT", "Related Product");
define("INV_FORM_FIELD_EDIT_VALUE_REQUIRED_FOR_ORDER", "Value Required for Order");
define("INV_FORM_FIELD_HELP_ATTRIBUTES", "Add any extra HTML attributes you want (if you don`t know what an HTML attribute is, just leave this blank).");
define("INV_FORM_FIELD_HELP_DEFAULT_VALUE", "");
define("INV_FORM_FIELD_HELP_DEFAULT_VALUE_OPTIONS", "There are specific options defined this field (to change these, click on the `options` button for the field on the main field list). The only values that you will be able to select here are those defined option values (because they will be the only values available to the end user when they are using this form).");
define("INV_FORM_FIELD_HELP_HELP_TEXT", "Enter some text here that will help the end user understand how to fill in this field. Where help text has been defined, an info icon will appear on the form, and the text will be displayed when the user hovers their mouse over it (just like the one you are hovering over now!).");
define("INV_FORM_FIELD_HELP_PRE_FIELD", "Anything you enter here will be output on the form immediately before the field itself. You can use HTML code if you wish.");
define("INV_FORM_FIELD_HELP_POST_FIELD", "Anything you enter here will be output on the form immediately after the field itself. You can use HTML code if you wish.");
define("INV_FORM_FIELD_HELP_RELATED_PRODUCT_CAT", "If you want the selection of a certain value for this field to result in a product being ordered, specify the category of the product here. NOTE: You can also specify different products for different option values using the `Options` button for the field on the main field list.");
define("INV_FORM_FIELD_HELP_RELATED_PRODUCT", "If you want the selection of a certain value for this field to result in a product being ordered, specify the product here. NOTE: You can also specify different products for different option values using the `Options` button for the field on the main field list.");
define("INV_FORM_FIELD_HELP_VALUE_REQUIRED_FOR_ORDER", "If you only want the above product to be ordered in the event that the this field matches a certain value, enter the value here. If you leave this blank AND select a product above, the product will be ordered if ANY value is entered for the field.");
define("INV_FORM_FIELD_HELP_VALUE_REQUIRED_FOR_ORDER_OPTIONS", "If you only want the above product to be ordered in the event that the this field matches a certain value, enter the value here. If you leave this set to `Not Applicable` AND select a product above, the product will be ordered if ANY value is entered for the field.");
define("INV_FORM_FIELD_ORDER_VALUE", "Order Value");
define("INV_FORM_FIELD_HELP_ORDER_VALUE", "If you want to use the value from this field as one of the order values, select the order value here (see also the `Order` tab on the main form editing screen).");
define("INV_FORM_FIELD_EDIT_OPTIONS", "Edit Field Options");
define("INV_FORM_FIELD_OPTIONS_INTRO", "Specify the options from which the end-user can select for this field (note: this is only applicable to field types that allow multiple choice - ie. dropdown lists and option lists)");
define("INV_OPTION", "Option");
define("INV_NEW_OPTION", "New");
define("INV_OPTION_VALUE", "Value");
define("INV_OPTION_DESCRIPTION", "Description");
define("INV_OPTION_ORDERING", "Ordering");
define("INV_OPTION_PRODUCT", "Related Product");
define("INV_OPTION_VALUE_HELP", "This is the actual value that will be stored for the field if the user selects this option. This can be different to the text or value that is actually displayed to the user.");
define("INV_OPTION_DESCRIPTION_HELP", "This is the text that is displayed to the user for this option.");
define("INV_OPTION_PRODUCT_HELP", "If selecting this option should cause a particular product to be ordered, you can specify which product here. Select a category from the first list, and the actual product from the second.");
define("INV_OPTION_DELETE", "Delete");
define("INV_OPTION_ADD_NEW", "Add");
define("INV_FIELD_OPTION_ENTER_VALUE", "Please enter the value for the new option.");
define("INV_FIELD_OPTION_ENTER_DESCRIPTION", "Please enter the description for the new option (this can be the same as the value, but doesn`t have to be).");
define("INV_SAVE_ORDERING", "Save Ordering");
define("INV_FIELD_ID_HELP", "The unique identifier for the field (used with the settings on the `Order` tab for specifying what to do with the field values).");
define("INV_FIELD_TYPE_HELP", "The type of control to display for the field. Option lists and dropdown lists allow you to specify a number of options to choose from. The `E-Mail Address` field type is just a textbox, but when the form is submitted the value entered is validated to make sure it is a valid e-mail address.");
define("INV_FIELD_NAME_HELP", "The unique name for the control on the form. This cannot have any spaces or special characters like punctuation. It is not displayed to the user.");
define("INV_FIELD_LABEL_HELP", "The label which is displayed to the user for this control. Appears to the left of the control.");
define("INV_FIELD_SUFFIX_HELP", "If the field type is a checkbox, enter the text for the checkbox here (this text appears to the right of the actual tick box)");
define("INV_FIELD_MORE_HELP", "Click on `Edit` to specify further settings for the field. `Options` is only available if the field type requires multiple choice options to be presented to the user (eg. for a dropdown list).");
define("INV_FORM_FIELD_ADD", "Add New");
define("INV_NEW_FIELD_NAME_REQUIRED", "Please enter a name for the new field.");
define("INV_NEW_FIELD_TYPE_REQUIRED", "Please select the type of field you want to add.");
define("INV_FIELD_NAME_NOT_UNIQUE", "The field name '%s' is not unique. Please specify a unique field name.");
define("INV_FIELD_DEF_MISSING", "The field definition record is missing from your database. This should never happen - unless you have been deleting records in the database directly. Please contact " . INV_BRANDING_COMPANY . " for support (support available in English only).");

//Field Types
define("INV_FLD_TEXTBOX", "Textbox");
define("INV_FLD_DROPDOWN", "Dropdown List");
define("INV_FLD_EMAIL", "E-Mail Address");
define("INV_FLD_RADIOLIST", "Option List");
define("INV_FLD_CHECKBOX", "Checkbox");
define("INV_FLD_TEXTAREA", "Text Area");
define("INV_FLD_DATE", "Date");
define("INV_FLD_HIDDEN", "Hidden");
define("INV_FLD_LABEL", "Label");
define("INV_FLD_JAVASCRIPT_BUTTON", "JavaScript Button");
define("INV_FLD_SUBMIT_BUTTON", "Process Button");
define("INV_FLD_JWHOIS_LOOKUP", "J!Whois Lookup");
define("INV_FLD_FILE_UPLOAD", "File Upload"); 

define("INV_FORM_VOUCHER_CODE", "Discount Voucher Code");
define("INV_INSTR_FORM_VOUCHER_CODE", "Either a static value for the discount voucher to apply, or a token representing a field value (eg. ##23##).");
define("INV_FORM_ORDER_GATEWAY", "Payment Gateway");
define("INV_INSTR_FORM_ORDER_GATEWAY", "Either a static value for the payment gateway to use, or a token representing a field value (eg. ##23##). The value here defaults to the value entered on the 'Details' tab, and if amended here, overrides that value.");
define("INV_FORM_CLIENT_DATA_INTRO", "Client Data Intro");
define("INV_INSTR_FORM_CLIENT_DATA_INTRO", "Introductory text to display on the client data capture page (if the user is not logged in, and the 'single page' option below is set to 'no', the order form will first display a login/registration page which captures the basic client details - the rest of the order form will appear on a 2nd page. This field specifies what to display on the first page, but the content will not be displayed if 'single page' is set to 'yes').");
define("INV_FORM_SINGLE_PAGE", "Single Page?");
define("INV_INSTR_FORM_SINGLE_PAGE", "Whether to merge client data capture with the rest of the form so that it only ever shows a single page (if 'yes', the client data intro text (above) will NOT be displayed - only the main form introduction (below) will be shown).");
define("INV_FORM_SHOW_LOGIN_BOX", "Show Login Box?");
define("INV_INSTR_FORM_SHOW_LOGIN_BOX", "Whether or not to display a login box if the user is not logged in.");
define("INV_CREATE_MENU_ITEM", "Create Menu Item");
define("INV_CREATE_MENU_ITEM_HELP", "Select a menu (if you have more than one), and click the button to create a menu item which links to this order form. You can then re-position/edit/delete the menu item using the menu manager.");
define("INV_CREATE", "Create");
define("INV_CREATE_MENU_NAME", "Please enter the text you want to display for the menu item link.");
define("INV_MENU_ITEM_CREATED", "Menu Item Created Successfully.");
define("INV_MENU_ITEM_NOT_CREATED", "Sorry, the Menu Item could not be created.");
define("INV_MENU_ITEM_TO_EDIT", "to edit the Menu Item.");
define("INV_ORDER_CREATION_CODE", "Order Creation Code");
define("INV_INSTR_ORDER_CREATION_CODE", "PHP code to evaluate when an order is created or processed for this order form (if `Pending until paid` is set to `yes`, this will only happen after payment has been received, or the pending order is activated by an administrator). This code will be called once for each order that is created (one order will be created for each different product) - use the \$product_id variable to identify which product an order record is being created for, and \$client_id to identify the client record. The order ID is also available in \$order_id. You should not rely on any other data being available (eg. if you need the client data, get it from the database, not the \$_POST values). If supported by the payment gateway, the code will also be called on each recurring payment (if the call is in relation to a recurring payment, the variable \$recurring will be set to true - so you can conditionally skip code execution for recurring payments if required). If that doesn't make sense to you, just leave this blank.");
define("INV_ORDER_FORM_TITLE_REQUIRED", "Please enter a title for this form.");
define("INV_FORM_FIELD_EDIT_RELATED_PRODUCT_QUANTITY", "Related Product Quantity");
define("INV_FORM_FIELD_HELP_RELATED_PRODUCT_QUANTITY", "Either a static value for the quantity of items to order (eg. `1`), or a token representing a field value (eg. ##23## - where 23 is the internal field id). You can use the field id for this field if you wish. NOTE: Only applicable if you have specified a related product. If left blank, the value will default to 1.");
define("INV_OPTION_QUANTITY", "Qty");
define("INV_OPTION_QUANTITY_HELP", "Either a static value for the quantity of items to order (eg. `1`), or a token representing a field value (eg. ##23## - where 23 is the internal field id). You can use the field id for this field if you wish. NOTE: Only applicable if you have specified a related product. If left blank, the value will be taken from the `Order` tab on the main form editor (and if that is also blank, it will default to 1).");
define("INV_FORM_DISQUAL_PRODUCTS", "Disqualifying Products");
define("INV_FORM_DISQUAL_CATS", "Categories");
define("INV_FORM_DISQUAL_CAT_PROD", "Products");
define("INV_FORM_DISQUAL_SELECTED_PROD", "Selected Product(s)");
define("INV_INSTR_FORM_DISQUAL_PRODUCTS", "If the user must NOT already have a certain product before they can use this order form (eg. if they already have it and are only allowed one, such as for user subscriptions), specify the disqualifying product(s) here. If more than one product is selected, the user will NOT be able to access this order form if they already have ANY one of the disqualifying products.");
define("INV_FLD_NUMERIC", "Numeric");
define("INV_FORM_ADMIN_EMAIL_ADDR", "Admin E-Mail Address");
define("INV_INSTR_FORM_ADMIN_EMAIL_ADDR", "E-Mail address of administrator if different from vendor email address (leave blank to use vendor email)");
define("INV_FORM_FIELD_MERGE", "Merge Cols");
define("INV_FORM_FIELD_MERGED", "Columns merged");
define("INV_FORM_FIELD_NOT_MERGED", "Columns not merged");
define("INV_MERGE_COLS_HELP", "Whether or not to merge the label column with the value column when displaying the form (typically for use with field type `label`)");
define("INV_ERR_FLD_NAME_IS_RESERVED_WORD", "Sorry, '%s' is a reserved word that is used by " . INV_BRANDING_NAME . " - you cannot use it as a field name.");
define("INV_FORM_AUTO_HANDLE_CARRIAGE", "Automatically Handle Carriage?");
define("INV_INSTR_FORM_AUTO_HANDLE_CARRIAGE", "Whether or not to automatically select and apply the most appropriate carriage rate(s), or offer the relevant choices to the user if more than one rate could be applied.");
define("INV_FORM_USE_EMAIL_ADDRESS", "Use E-Mail Address as Username?");
define("INV_INSTR_FORM_USE_EMAIL_ADDRESS", "Whether or not to use the e-mail address as the username for new users created by this form (thus not requiring the user to select a username). WARNING! This requires a hack to a core file to allow hyphens in usernames, and to increase the username field length. See " . INV_BRANDING_NAME . " documentation for more information.");
define("INV_JAVASCRIPT_FUNCTIONS", "Javascript Functions");
define("INV_INSTR_JAVASCRIPT_FUNCTIONS", "Enter any Javascript that you want to be inserted into the &lt;head&gt; section. Please do not include the &lt;script&gt; tags - just the actual function definitions.");
define("INV_UPLOAD_PATH", "Upload Path");
define("INV_INSTR_UPLOAD_PATH", "Enter the full path name where you want to store files that are uploaded by users (folder must be writeable by the user that PHP runs under). After you have entered a valid, writeable path here, you must click on either 'Apply' or 'Save' before the file upload field type will become available for use on this form.");
define("INV_UPLOAD_MAX_SIZE", "Upload Max File Size");
define("INV_INSTR_UPLOAD_MAX_SIZE", "Enter the maximum file size (in Kilobytes) that can be uploaded.");
define("INV_UPLOAD_ALLOWED_TYPES", "Allowed File Types");
define("INV_INSTR_UPLOAD_ALLOWED_TYPES", "Enter a pipe (|) delimited list of field types that are allowed to be uploaded (eg. .jpg|.bmp|.gif). Leave blank to allow any file type to be uploaded.");
define("INV_ATTACH_TO_EMAIL", "Attach to Admin E-Mail?");
define("INV_INSTR_ATTACH_TO_EMAIL", "Whether or not to attach uploaded files to the confirmation e-mail that gets sent to the administrator (if applicable).");
define("INV_SECURITY_IMAGE", "Use Security Image?");
define("INV_INSTR_SECURITY_IMAGE", "Whether or not to display a CAPTCHA style security image to prevent spamming (requires the PHP GD and truetype library to be installed on your web server).");

//Version 1.2.0
define("INV_ORDER_FORM_LINK", "You can link to this order form from your website content using the following URL: %s");
define("INV_ORDER_FORM_LINK_PREPOP", "Note: You can also pre-populate fields on your form by adding URL parameters. For example, if you have a field on your form called 'message', you could add &quot;&amp;message=hello%20world&quot; (without the quotes) to the end of the above URL to pre-populate that field with the value 'hello world'. This could be useful for example where there are several products that can be ordered on the form, and you want to pre-select the product to order depending on which article the link appears in.");
define("INV_ORDER_FORM_THANK_YOU", "Thank You Message");
define("INV_INSTR_ORDER_FORM_THANK_YOU", "If the user is not redirected elsewhere by the payment gateway (or by your own redirect setting, above), this is the message that will be displayed on successful submission of the order form.");
define("INV_FORM_DEFAULT_THANK_YOU", "Thank you for your order.");
define("INV_ORDER_FORM_DUPLICATE_PRODUCTS", "WARNING! You have assigned a product to a field TWICE on the order form(s) highlighted below. This will result in the product being ordered twice. You should only assign a product on EITHER the edit field popup OR the options popup, not both.");
define("INV_ORDER_FORM_PRE_SUBMIT", "Pre-Submit Code");
define("INV_INSTR_ORDER_FORM_PRE_SUBMIT", "PHP code to evaluate after the form is submitted by the user, but before it is processed by " . INV_BRANDING_NAME . " (allows you to modify the values of any of the fields before the amounts are calculated). If that doesn't make sense to you, just leave this blank.");

//Version 1.2.1
define("INV_ORDER_FORM_FIELD_RESERVED_WORD", "Sorry, `%s` is a reserved word with a special meaning. Please select a different name for this field.");
define("INV_ORDER_FORM_THANK_YOU_REDIRECT", "Order Complete Redirect");
define("INV_INSTR_ORDER_FORM_THANK_YOU_REDIRECT", "If you want to redirect the user to another page when an order is submitted instead of displaying the thank you message defined below, please enter a URL here. NOTE: This will have no effect if the payment gateway performs its own redirect.");
define("INV_ORDER_FORM_EXPIRE_AFTER", "Number of Billing Cycles");
define("INV_INSTR_ORDER_FORM_EXPIRE_AFTER", "If you want to automatically calculate the expiry date for the order based on a certain number of payment cycles, enter the number of payments here, or leave blank if you don't want to automatically calculate an expiry date. For example, to bill monthly for 6 months then stop, set the payment frequency to monthly, and enter 6 here. To pick up the number of billing cycles from a field, enter the field ID surrounded by double-hashes, eg. ##23##");

//Version 1.2.5 - Note to translators
//Line 203 of original English language file amended (there is no longer a quantity setting on the order tab, so if the value is left blank it now just defaults to 1)

//Version 1.2.6
define("INV_FLD_PASSWORD", "Password");
?>
