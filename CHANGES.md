## Laravel Test Application - Making Changes

We would now like to make some edits to this Laravel application.  You will be required to understand the Laravel framework and the TALL stack (Tailwind, AlpineJS, Livewire, Laravel) to complete the tasks.  You can use any IDE or text edit to complete these changes, but I'd recommend PHPStorm or Visual Studio Code.

### Lets make some changes!

1. Create a new livewire component called ***EditUser***.
2. Create a new named route to display the ***EditUser*** livewire component on URL `/user/edit/{id}`.
3. Link the ***Edit*** button on the user list to the new `/user/edit/{id}` route.
4. In the Livewire component ***EditUser***, load the user record from the database.
5. Add a form to the ***EditUser*** component to allow the user details to be updated.
6. Add validation rules to the Livewire component.
7. Create a `save` method in the ***EditUser*** component to update the user record in the database and display an appropriate success message.
8. Link up the `save` method to the form save button.
---
### 1. Create a new livewire component called ***EditUser***.

Create a new Livewire component that will be used to edit an existing user record.

```Hint: Laravel Artisan has built in commands to build Livewire components.```

---

### 2. Create a new named route to display the ***EditUser*** livewire component on URL `/user/edit/{id}`.

In Laravel's main routing file add a `GET` request route that will display the ***EditUser*** livewire component when the URL `/user/edit/{id}` is accessed.

```Hint: You will need to add a new route to the `routes/web.php` file.  Use the existing route in the file as a guide to add a new route to display the EditUser component.```

---

### 3. Link the ***Edit*** button on the user list to the new `/user/edit/{id}` route.

In the file `resources/views/livewire/users.blade.php` there is a hyperlink styles to look like a button on line 21.  Link this button to the newly created `/user/edit/{id}` route.

```Hint: You should use the route name to link the button tht edit user route.```

***<span style="color:#155CA2">Question: Can you also tell me what is the markup on line 21 and 22 of the `resources/views/livewire/users.blade.php` file?</span>***

---

### 4. In the Livewire component ***EditUser***, load the user record from the database.

In the newly created Livewire component `EditUser.php` load the user record from the database using the `id` parameter passed in the URL.

```Hint: You will need to use the `mount` method in the Livewire component to load the user record from the database.```

---

### 5. Add a form to the ***EditUser*** component to allow the user details to be updated.

In the view for the Livewire component add a form that will allow the user to update the user record for the following fields:

- Name (name)
- Email (email)
- Phone (phone)
- Date-of-Birth (dob)
- Employee ID (employee_id)

```Hint: You will need to link up each field in the form to the user record loaded in the `mount` method.```

---

### 6. Add validation rules to the Livewire component.

In the newly created Livewire component add validation rules to the form fields to ensure that input is valid as follows:

- Name (Is required and must be string)
- Email (Is required and must be an email address)
- Phone (Is required and must be a phone number)
- Date-of-Birth (Is required and must be a date in the past)
- Employee ID (Is required)

```Hint: You will need to output any validation errors in the form. You can use the `@error` directive to output the validation errors.```

---

### 7. Create a `save` method in the ***EditUser*** component to update the user record

In the newly created Livewire component create a `save` method that will update the user record in the database.

```Hint: You will need to use the `update` method on the user record to save the changes to the database.```

---

### 8. Link up the `save` method to the form save button.

Now that you have a save method in the new component, link this up to the form save button so that when the user clicks the save button the user record is updated in the database and display an appropriate success message.

```Hint: You will need to use one of the in-built Liewire commands to connect up the button to the method.```

---

***Congratulations! You have now completed the changes to the Laravel application.***