## Laravel Test Application - Get Up and Running

We would now like to make some edits to this Laravel application.  You will be required to understand the Laravel framework and the TALL stack (Tailwind, AlpineJS, Livewire, Laravel) to complete the tasks.  You can use any IDE or text edit to complete these changes, but I'd recommend PHPStorm or Visual Studio Code.

### Lets make some changes!

1. Create a new livewire component called ***EditUser***.
2. Create a new named route to display the ***EditUser*** livewire component on URL `/user/edit/{id}`.
3. Link the ***Edit*** button on the user list to the new `/user/edit/{id}` route.
4. In the Livewire component ***EditUser***, load the user record from the database to display the user's details in the Livewire view.
5. Add a form to the ***EditUser*** component to allow the user details to be updated.
6. Create a `save` method in the ***EditUser*** component to update the user record in the database and display an appropriate success message.
---
### 1. Create a new livewire component called ***EditUser***.

Create a new Livewire component that will be used to edit an existing user record.

```Hint: Laravel Artisan has built in commands to build Livewire components.```

<details>
<summary> <b>Help:</b> </summary>
  Using a terminal window in the root of the project run the following command:
  
  ```php artisan make:livewire EditUser```

</details>

---

### 2. Create a new named route to display the ***EditUser*** livewire component on URL `/user/edit/{id}`.

In Laravel's main routing file add a `GET` request route that will display the ***EditUser*** livewire component when the URL `/user/edit/{id}` is accessed.

```Hint: You will need to add a new route to the `routes/web.php` file.```

<details>
<summary> <b>Help:</b> </summary>
  Using a terminal window in the root of the project run the following command:

```php artisan make:livewire EditUser```

</details>

---