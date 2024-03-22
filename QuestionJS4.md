Praktikum 1
3) When accessing the URL localhost/PWL_POS/public/user, the webpage will show the user data that has been inputted, specifically 'manager_two'. Additionally, the database will expand by one row.
6) The error 'SQLSTATE[HY000]: General error: 1364 The 'password' field has no default value' occurs because the 'password' field in the UserModel is not set with a default value and is not marked as a field that can be assigned en masse.

Praktikum 2.1
3) In the initial step, by utilizing the find method ($user = UserModel::find(1);), a specific record identified by the primary key is fetched, in this case, it retrieves the m_user data corresponding to the primary key value of 1.
5) During the fourth step, by applying the first method ($user = UserModel::where('level_id', 1)->first();), it fetches records filtered by the level_id, with this specific code segment pulling m_user data that has a level_id of 1.
7) In the sixth step, through the use of the firstWhere method ($user = UserModel::firstWhere('level_id', 1);), it functions similarly to the previous instance, fetching records based on specified criteria, here fetching m_user data with a level_id valued at 1.
9) Consequently, when a record with the primary key of 1 is located, the $user variable is populated with that record, and the 'user' page is then displayed showcasing that data. Conversely, should there be no record with a primary key of 1, a 404 error page is shown.
11) The outcome is a 'page not found 404' error due to the absence of any record with a primary key of 20.

Praktikum 2.2
2) At the outset, the FindOrFail method endeavors to locate records using a designated primary key. Should the search prove fruitless, a ModelNotFoundException exception is thrown. In this scenario, however, the record is successfully retrieved, yielding user data corresponding to the primary key queried.
4) The absence of records containing the datum 'manager9' culminates in the display of a 'page not found' error.

Praktikum 2.3
2) Executing the code results in the display of '2 // app\Http\Controllers\UserController.php:50' on the web page. This output counts and prints the total users with a level_id of 2 for debugging purposes, before proceeding to load the 'user' view, incorporating the count of such users.

Praktikum 2.4
2) The code in the first step is for adding new user information into the database using the firstOrCreate method.
5) Specifically, it adds new data with the username 'manager22', the name 'Manager Dua Dua', and a level_id of '2' into the database.
7) The firstOrNew method looks for the specified data in the database; if it finds what it's looking for, that data is shown.
9) In the eighth step, the database doesn't show the newly entered data because it hasn't been saved yet.
11) By the tenth step, the database shows the new data because it has been saved using the save() method.

Praktikum 2.5
2) When $user->isDirty() comes back as false in the first step, it means the $user model didn't change after using the save() method.
4) The method $user->wasChanged() helps figure out if there were any changes to the model after saving. This can help with doing checks or other actions related to those changes.

Praktikum 2.6
4) The web page retrieves and displays user data from the database, featuring links for 'Add User' which directs to the 'user/add' path, and 'Delete' which leads to the '/user/delete' path.
8) An error message appears on the web page because the route [/user/add_save] is not configured.
11) By selecting '+add user', the web page presents a form to add a new user, allowing for the form to be filled out and submitted by pressing the 'save' button.
14) Clicking the 'Change' button opens a form titled 'Form Ubah Data User' for updating user information.
17) Data is updated upon clicking the 'Change' button.
19) Selecting the 'Hapus' button will remove the chosen data from the database.

Praktikum 2.7
3) The index method executes, displaying a detailed dump of all users and their associated 'level' data retrieved from the database, halting further script execution.
6) After saving the program code and running the link in the browser, the web page displays a table listing user data including their ID, username, name, level ID, level code, level name, along with 'Change' and 'Delete' actions for each user,






