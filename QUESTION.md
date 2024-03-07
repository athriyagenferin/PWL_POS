1. In Practicum 1 - Step 5, what is the function of the APP_KEY in the Laravel .env setting
file?
- The APP_KEY serves as a crucial security element in Laravel applications. It's a random, 32-character string that acts as a secret key used for various encryption and decryption tasks.

2. In Practicum 1, how do we generate value for APP_KEY?
- Laravel provides a convenient command to automatically handle this task.The php artisan key:generate command: This command will generate a random, 32-character string and update the APP_KEY value in your .env file automatically.

3. In Practicum 2.1 - Step 1, by default how many migration files does Laravel have? and what are the migration files for?
-there are 4. the function is for can automatically apply the changes defined in your migration files to your database, streamlining the process of updating your schema.

4. By default, the migration file contains the code $table->timestamps();, what is the
purpose/output of the function?
-The $table->timestamps(); function in your Laravel migration file serves the purpose of automatically adding two columns to database table:
- created_at: This column stores the date and time when a record is first inserted into the table.
- updated_at: This column automatically updates with the current date and time whenever a record is modified.

5. In the Migration File, there is a function $table->id(); What type of data does the function return?
-Using the $table->id() function in the migration file generates a primary key in the form of an unsigned big integer data type.

6. What is the difference between the migration results in the m_level table, between using
$table->id(); by using $table->id('level_id'); ?
-In primary key column naming, where the use of '$table->id('level_id');' gives more direct control over the name of the generated primary key column.

7. In migrations, what is the ->unique() function used for?
-The $table->id(); function in a Laravel migration file doesn't explicitly return a data type in the traditional sense. However, it creates a column in database table with specific characteristics, including its data type.

8. In Practicum 2.2 - Step 2, why does the level_id column in the m_user table use $tabel->unsignedBigInteger('level_id'), while the level_id column in the m_level table uses $tabel->id('level_id') ?
-In the 'm_user' table, the use of '$table->unsignedBigInteger('level_id')' is due to its function as a foreign key that associates the user with a specific access level. This ensures that the value 'level_id' is always positive and matches the data type used by the ID column in the level table.
-In the 'm_level' table, '$table->id('level_id')' is used as a reference table containing a list of access levels. This sets the column 'level_id' as the primary key with data type 'unsignedBigInteger' and auto increment, so the resulting ID column name is 'level_id'.

9. In Practicum 3 - Step 6, what is the purpose of the Hash Class? and what does the Hash
program code mean::make('1234');?
-Hashing in Laravel is done using the Hash class to keep data safe, especially user passwords, by converting them into a form that is difficult to change back. For example, Hash::make('1234') will generate a unique hash of the string "1234", that changes each time the code is executed.

10. In Practicum 4 - Step 3/5/7, in the query builder there is a question mark (?), what is
the use of the question mark (?) of these?
-The question mark (?) in the query builder acts as a slot for the value to be entered in the query. These values are retrieved from the array provided as the second argument in the query builder method. Thus, such question marks replace the corresponding values in the query, ensuring smooth query execution by the database.

11. In Practicum 6 - Step 3, what is the purpose of writing protected code $table =
'm_user'; and protected $primaryKey = 'user_id'; ?
-'protected $table = 'm_user';' specifies the table name used by the model 'UserModel', ensuring the model is connected to the correct table. While 'protected $primaryKey = 'user_id';' specifies the primary key used by the model, allowing Laravel to properly access and manipulate the data in the table. Thus, these two codes help the 'UserModel' model interact with the m_user table.

12. In your opinion, where is it easier to use in performing CRUD operations to the database
(DB Façade / Query Builder / Eloquent ORM) ?
-Eloquent ORM is preferred because it offers a more expressive and easy-to-understand syntax. However, for tasks that require a low level of customization or greater control over the query structure, DB Façade or Query Builder may be a better choice.
