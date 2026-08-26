# Travel Diary

Travel Diary is a Laravel website where users can share their travel experiences and discover posts from other users.

This project was made for the Backend Web course using Laravel 13.

## Features

- Registration and login
- Normal users and administrators
- Public user profiles
- Editing your own profile
- Creating, editing and deleting travel posts
- Categories for travel posts
- FAQ page
- Contact form
- Admin dashboard
- Admin user management
- Responsive navigation

## User Profiles

Every user has a public profile that can also be viewed without being logged in.

A user can edit their own profile and add:

- Name
- Username
- Email
- Birthday
- About me
- Profile picture

The profile can be accessed through the user menu after logging in.

## Travel Posts

Logged-in users can create travel posts.

A travel post contains:

- Title
- Country
- Content
- Publication date
- Categories

Users can:

- Create a post
- View posts
- Edit a post
- Delete a post
- Add one or more categories to a post

The categories use a many-to-many relationship with travel posts.

## FAQ

The website has a FAQ page where visitors can see questions and answers.

Administrators can:

- Create FAQ items
- Edit FAQ items
- Delete FAQ items
- Manage FAQ categories

## Contact

Visitors can use the contact form to send a message.

Administrators can view the submitted contact messages from the admin section.

## Admin

Administrators have access to an admin section.

Admins can:

- Access the admin dashboard
- Manage users
- Create users manually
- Give users administrator rights
- Remove administrator rights
- Manage FAQs
- View contact messages

There is also a default admin account created by the seeder.

Email: admin@ehb.be  
Password: Password!321

## Technologies

- Laravel 13
- PHP 8.4
- Laravel Breeze
- Blade
- Tailwind CSS
- SQLite
- Eloquent ORM

## Installation

Clone the repository:

```bash
git clone https://github.com/lokiyolauregrace/Travel-Diary.gitDiaryd under the [MIT license](https://opensource.org/licenses/MIT).
