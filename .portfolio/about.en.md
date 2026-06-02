## Laravel Blog CMS

A full-featured blog content management system built with the Laravel PHP framework. This project served as a comprehensive introduction to server-side MVC architecture, relational databases, and Laravel's ecosystem of tools.

### Features

- **Authentication & Authorization**: User registration, login, and role-based access control (admin vs. author vs. reader) using Laravel Breeze and Gates.
- **Rich Post Management**: Create, edit, publish, and delete blog posts with a rich text editor (Trix), category tagging, and featured image upload.
- **Comment System**: Nested comments with moderation — admins can approve, hide, or delete comments from the dashboard.
- **Admin Dashboard**: A dedicated management interface showing site statistics, pending comments, draft posts, and user management.
- **Search & Filtering**: Full-text search across posts with filtering by category, author, and date range using Eloquent query scopes.
- **Responsive Design**: Built with Tailwind CSS and Alpine.js for a clean, mobile-first interface.

### Technical Highlights

- **Eloquent ORM**: Leverages Laravel's ORM for clean database interactions — polymorphic relationships for comments, many-to-many for tags, and eager loading to prevent N+1 query problems.
- **Blade Templating**: Component-based UI architecture using Blade components and slots.
- **Laravel Queues**: Email notifications for new comments dispatched via queued jobs to keep HTTP responses fast.
- **File Storage**: Post images stored using Laravel's filesystem abstraction with local disk and S3-compatible storage support.
