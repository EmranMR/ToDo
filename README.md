### Some Notes

---

-   This is a full stack simple to do list.
-   Stack used: TALL stack: TailwindCSS, AlpineJS, Livewire, Laravel
-   Latest version of all frameworks have been used
-   The authentication is provided by Jetstream + Fortify via Livewire
    Stack
    -   It was my first time using Jetstream, and I wished I just used
        headless Fortify
    -   The default Livewire was old so I had to sort of rewrite a bit
        to make the app SPA
-   I understand Vue is used as a stack, I do not have any problem
    **Learning** and **Using** Node frameworks
-   I am proficient in `typescript`, `NodeJS`, `Deno` and `Javascript`
    so I can quickly pick up if needed

### Dev Set Up

---

-   Latest `PHP`, that is `v8.3^` was used for this project

1. Install `Composer` Dependancies:

```bash
composer install
```

2. Install `NodeJS` Dependancies

```bash
npm i
# or
deno install
```

3. Create `.env` file

```bash
cp .env.example .env
```

4. Generate the app key

```bash
php artisan key:generate
```

5. Create the sqlite Database

```bash
touch ./database/database.sqlite
```

6. Migrate the database and seed with test user

```bash
php artisan migrate:fresh --seed
```

7. Start the development server

```bash
# you can either use tmux
# or to tty terminals
# or run each of these programs in backgrount with ctr+z

# 1 start the php server
php artisan serve

#2 start the viteJS server for asset bundling
npm run dev
# or
deno task dev
```

-   And that is it you can head over to `http://localhost:8000`
-   Feel free to use `valet` if you prefer valet.
-   `Factory` was used for seeding a test User

```bash
username = test@example.com
password = password
```

### The Application

---

-   It is a very simple To Do app with all the functionalities built
    in
-   Once logged in and in the dashboard, you will see the To Do form
-   Once saved, a notification will be sent using event listener to
    inform you of success or failure
-   After adding few to dos you can see them in the `My List` tab
-   There you could see each in detail or archive
-   in Archive you can delete
-   There is Migration and Relations for Tags and Categories, however
    as they were not part of Technical Requirement not implemented yet
-   `ToDoStatus Enum` was created to restrict and mark the To Do list
-   The architecture is MVVM so you will not see any `Controllers` as
    requested
-   Unlike **Inertia** Livewire uses the Livewire Components to handle
    logic and `views`
-   You could see the Livewire components at `app/Livewire/` and
    corresponding views at `resources/views/livewire`
-   More than happy to discuss how Livewire works in depth if you
    require
-   There is a simple front end and backend validation. The backend
    validation is live. I restricted to alphanumeric so feel free to
    use special charcters and `on:blur` you will see an automatic
    backend validation
