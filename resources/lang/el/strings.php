<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm'  => 'Are you sure you want to delete this user permanently? Anywhere in the application that references this user\'s id will most likely error. Proceed at your own risk. This can not be un-done.',
                'if_confirmed_off'     => '(If confirmed is off)',
                'restore_user_confirm' => 'Restore this user to its original state?',
            ],
        ],

        'dashboard' => [
            'title'   => 'Αρχική',
            'welcome' => 'Καλώς Ήρθατε',
        ],

        'general' => [
            'all_rights_reserved' => 'All Rights Reserved.',
            'are_you_sure'        => 'Are you sure?',
            'boilerplate_link'    => 'Laravel 5 Boilerplate',
            'continue'            => 'Continue',
            'member_since'        => 'Member since',
            'minutes'             => ' minutes',
            'search_placeholder'  => 'Search...',
            'timeout'             => 'You were automatically logged out for security reasons since you had no activity in ',

            'see_all' => [
                'messages'      => 'See all messages',
                'notifications' => 'View all',
                'tasks'         => 'View all tasks',
            ],

            'status' => [
                'online'  => 'Online',
                'offline' => 'Offline',
            ],

            'you_have' => [
                'messages'      => '{0} You don\'t have messages|{1} You have 1 message|[2,Inf] You have :number messages',
                'notifications' => '{0} You don\'t have notifications|{1} You have 1 notification|[2,Inf] You have :number notifications',
                'tasks'         => '{0} You don\'t have tasks|{1} You have 1 task|[2,Inf] You have :number tasks',
            ],
        ],

        'search' => [
            'empty'      => 'Please enter a search term.',
            'incomplete' => 'You must write your own search logic for this system.',
            'title'      => 'Search Results',
            'results'    => 'Search Results for :query',
        ],
        'welcome' =>[
            'referee'   => '<p>Καλώς ήλθατε στην πλατφόρμα διαχείρισης διαιτησίας της Ένωσης Ποδοσφαιρικών Σωματείων Αχαΐας. </p> 
                    <p>Στην πλατφόρμα αυτή μπορείτε να εκτυπώσετε το φύλλο αγώνα της επόμενης αγωνιστικής να δείτε τα προηγούμενα φύλλα αγώνα </p>
                    <p>- Από την Διοίκηση της ΕΠΣΑ</p>',
            'administrator'=> '<p style="text-justify">Καλώς ήλθατε στην πλατφόρμα διαχείρισης Πρωταθλημάτων Ποδοσφαίρου της {{ App\Models\Backend\eps::getAll()->short_name }}. </p> 
                    <p style="text-justify">Στην πλατφόρμα αυτή μπορείτε να διαχειριστείτε τις Κατηγορίες, τα Πρωταθλήματα, το Κύπελλο, τους Διαιτητές, τα Σωματεία, τους Ποδοσφαιριστές, τις Ποινές τους χρήστες του συστήματατος κλπ κλπ κλπ κλπ κλπ κλπ </p>
                    <p style="text-justify">- Από την Διοίκηση της ΕΠΣΑ</p>',
            'chief_referee' => '<p>Καλώς ήλθατε στην πλατφόρμα διαχείρισης διαιτησίας της Ένωσης Ποδοσφαιρικών Σωματείων Αχαΐας. </p> 
                    <p>Στην πλατφόρμα αυτή μπορείτε να δείτε τους διαιτητες κλπ κλπ κλπ κλπ </p>
                <p>- Από την Διοίκηση της ΕΠΣΑ</p>'
            ],
    ],

    'emails' => [
        'auth' => [
             'account_confirmed' => 'Ο λογαριασμός στην εφαρμογή διαιτητών της ΕΠΣ Αχαΐας έχει επιβεβαιώθει.',
            'error'                   => 'Whoops!',
            'greeting'                => 'Γεια σας!',
            'regards'                 => 'Με εκτίμηση,',
            'trouble_clicking_button' => 'Αν έχετε πρόβλημα με το κουμπί ":action_text", Αντιγράψτε τον παρακάτω συνδεσμο στον περιηγητή ιστού σας:',
            'thank_you_for_using_app' => 'Ευχαριστούμε που χρησιμοποιείτε την εφαρμογή μας!',

            'password_reset_subject'    => 'Επαναφορά Κωδικού',
            'password_cause_of_email'   => 'Λάβατε αυτό το email γιατί ζητήσατε επαναφορά του κωδικού πρόσβασής σας.',
            'password_if_not_requested' => 'Αν δεν ζητήσατε επαναφορά του κωδικού πρόσβασής σας μην προβείτε σε άλλες ενέργειες.',
            'reset_password'            => 'Πατήστε εώ για να επαναφέρετε τον κωδικό σας',

            'click_to_confirm' => 'Πατήστε εδώ για να επιβεβαιώσετε τον λογαριασμό σας:',
        ],

        'contact' => [
            'email_body_title' => 'You have a new contact form request: Below are the details:',
            'subject' => 'A new :app_name contact form submission!',
        ],
    ],

    'frontend' => [
        'test' => 'Test',

        'tests' => [
            'based_on' => [
                'permission' => 'Permission Based - ',
                'role'       => 'Role Based - ',
            ],

            'js_injected_from_controller' => 'Javascript Injected from a Controller',

            'using_blade_extensions' => 'Using Blade Extensions',

            'using_access_helper' => [
                'array_permissions'     => 'Using Access Helper with Array of Permission Names or ID\'s where the user does have to possess all.',
                'array_permissions_not' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does not have to possess all.',
                'array_roles'           => 'Using Access Helper with Array of Role Names or ID\'s where the user does have to possess all.',
                'array_roles_not'       => 'Using Access Helper with Array of Role Names or ID\'s where the user does not have to possess all.',
                'permission_id'         => 'Using Access Helper with Permission ID',
                'permission_name'       => 'Using Access Helper with Permission Name',
                'role_id'               => 'Using Access Helper with Role ID',
                'role_name'             => 'Using Access Helper with Role Name',
            ],

            'view_console_it_works'          => 'View console, you should see \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because'            => 'You can see this because you have the role of \':role\'!',
            'you_can_see_because_permission' => 'You can see this because you have the permission of \':permission\'!',
        ],

        'general' => [
            'joined'        => 'Joined',
        ],

        'user' => [
            'change_email_notice' => 'If you change your e-mail you will be logged out until you confirm your new e-mail address.',
            'email_changed_notice' => 'You must confirm your new e-mail address before you can log in again.',
            'profile_updated'  => 'Profile successfully updated.',
            'password_updated' => 'Password successfully updated.',
        ],

        'welcome_to' => 'Welcome to :place',
    ],
];
