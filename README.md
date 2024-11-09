Create a simple to-do list application using Laravel. The application should have the following 
features:

1. User Authentication: Implement basic user registration and login functionalities (Use an existing package for this, If you’re using a laravel starter kit like Jetstream then it should come with auth built in)
2. Task Creation: Users should be able to create new tasks with a title and description.
3. Task Listing: Display a list of all tasks.
4. Task Completion: Users should be able to mark tasks as completed.
5. Task Deletion: Users should be able to delete tasks.
6. Validation: Ensure that tasks have valid titles and descriptions.

### Technical Requirements:
 - Laravel Framework: Use Laravel's features to structure the application.
 - Database: Use a MySQL or SQLite database to store tasks and user information.
 - Controllers and Models: Create controllers and models to handle the application's logic and data.
 - Views: Use Blade templates to create the user interface.
 - Validation: Implement validation rules to ensure data integrity.
 - Routing: Define routes to handle user requests.
 - Migrations: Use migrations to set up the database schema. Implement a seeder to create a user that we can login to once the project is set up.
### Additional Considerations:
- Code Quality: Write clean, well-structured, and commented code.
- Design: This assessment isn’t testing design ability, and I won’t be considering the aesthetics, that being said it would be a good idea to demonstrate your ability to use CSS/TailwindCSS even if the designs are very simple.
- Security: Implement basic security measures, validate any user input and make sure that users only have access to their own notes
- Error Handling: Handle errors gracefully and provide informative error messages.
- Testing: Consider writing unit tests to ensure code reliability.
- Technology: At Dogstar Digital we use Laravel for the backends with a combination of blade or Vue depending on the reactivity needs of the app. TailwindCss is used across nearly all of our projects so it would be good to see an understanding of tailwind or similar systems. If you have experience with Vue, it might be a good idea to demonstrate it.
- Third Party Packages: Feel free to use libraries that already exist to create the app, We often use existing libraries in our projects.

A README.md should exist with instructions on how to build the project.

The project can either be placed in a public repository on a git provider like GitHub, BitBucket etc or in a zip file (please remove vendor and node_modules directories before zipping)
