# 📋 TaskMaster - Task Management App

TaskMaster is a web-based task management application (enhanced To-Do List) built with the **Laravel** framework. It helps you structure your daily work with an intuitive interface.

## 🌟 Key Features

-   **Full Task Management**: Create, Read, Update, and Delete tasks.
-   **Secure Authentication**: Complete Login/Register system.
-   **Priority Levels**: Assign priorities (Low, Medium, High).
-   **Project Categorization**: Organize tasks by projects.
-   **Due Date Tracking**: Never miss a deadline.
-   **Status Filters**: Filter by status (To Do, In Progress, Done).

## 🛠️ Installation

Follow these steps to install the project on your local machine:

1. **Clone the repository:**

    ```bash
    git clone [https://github.com/your-username/your-project.git](https://github.com/your-username/your-project.git)
    ```

2. **Navigate to the folder:**

    ```bash
    cd your-project
    ```

3. **Install PHP dependencies:**

    ```bash
    composer install
    ```

4. **Install JavaScript dependencies:**

    ```bash
    npm install && npm run build
    ```

5. **Configure the environment:**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

6. **Configure the database:**
   (Create an empty database and update the credentials in the `.env` file)

7. **Run migrations:**

    ```bash
    php artisan migrate
    ```

8. **Start the local server:**
    ```bash
    php artisan serve
    ```

## 📊 Database Structure

The application uses the following relationships:

-   **User** (1) ---> (N) **Tasks**
-   **Category** (1) ---> (N) **Tasks**

## 🚀 Technologies Used

-   **Backend:** Laravel 11
-   **Frontend:** Blade & Tailwind CSS
-   **Database:** MySQL / PostgreSQL
-   **Server:** Artisan (development)
