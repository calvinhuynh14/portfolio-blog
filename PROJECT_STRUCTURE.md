# Portfolio + Blog Project Structure

## 1. Database Structure

### Posts Table

-   id (primary key)
-   title (string)
-   slug (string, unique)
-   content (text, markdown)
-   excerpt (text)
-   featured_image (string, nullable)
-   status (enum: draft, published)
-   published_at (timestamp, nullable)
-   category_id (foreign key)
-   created_at, updated_at

### Categories Table

-   id (primary key)
-   name (string)
-   slug (string, unique)
-   description (text, nullable)
-   created_at, updated_at

### Portfolio Items Table

-   id (primary key)
-   title (string)
-   slug (string, unique)
-   description (text)
-   content (text, markdown)
-   featured_image (string)
-   gallery_images (json, nullable)
-   project_url (string, nullable)
-   github_url (string, nullable)
-   technologies (json)
-   status (enum: draft, published)
-   published_at (timestamp, nullable)
-   created_at, updated_at

## 2. Filament Resources

### Post Resource

-   List view with:
    -   Title
    -   Category
    -   Status
    -   Published date
    -   Actions (edit, delete)
-   Form with:
    -   Title
    -   Slug (auto-generated)
    -   Content (markdown editor)
    -   Excerpt
    -   Featured image upload
    -   Category selection
    -   Status selection
    -   Published date picker

### Category Resource

-   List view with:
    -   Name
    -   Slug
    -   Post count
    -   Actions
-   Form with:
    -   Name
    -   Slug (auto-generated)
    -   Description

### Portfolio Item Resource

-   List view with:
    -   Title
    -   Status
    -   Published date
    -   Actions
-   Form with:
    -   Title
    -   Slug (auto-generated)
    -   Description
    -   Content (markdown editor)
    -   Featured image upload
    -   Gallery images upload
    -   Project URLs
    -   Technologies (tags)
    -   Status
    -   Published date

## 3. Frontend Routes

### Public Routes

-   / (Home page)
-   /blog (Blog listing)
-   /blog/{slug} (Single post)
-   /portfolio (Portfolio listing)
-   /portfolio/{slug} (Single portfolio item)
-   /about (About page)
-   /contact (Contact page)

### Admin Routes

-   /admin (Filament dashboard)
-   /admin/posts
-   /admin/categories
-   /admin/portfolio-items

## 4. Implementation Steps

1. Database Setup

    - Create migrations
    - Set up models with relationships
    - Add necessary traits and attributes

2. Filament Resources

    - Create resources
    - Customize forms and tables
    - Add file upload handling
    - Implement markdown support

3. Frontend Development

    - Create layout components
    - Implement blog listing and single post views
    - Create portfolio grid and detail views
    - Add about and contact pages

4. Additional Features
    - SEO optimization
    - Social media integration
    - Analytics setup
    - Search functionality

## 5. Required Packages

-   filament/filament (already installed)
-   spatie/laravel-markdown (for markdown support)
-   spatie/laravel-sluggable (for URL-friendly slugs)
-   spatie/laravel-medialibrary (for image handling)
-   spatie/laravel-tags (for portfolio technologies)

## 6. Security Considerations

-   Admin authentication (Filament)
-   File upload security
-   XSS protection
-   CSRF protection
-   Rate limiting
-   Input validation

## 7. Performance Optimizations

-   Image optimization
-   Caching strategies
-   Database indexing
-   Asset compilation
-   Lazy loading
