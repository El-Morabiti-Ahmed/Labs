## Introduction

This project is a small game-management web application. It displays a list of games and provides a form for adding new entries. The frontend is built with HTML, JavaScript, and Tailwind CSS. JavaScript communicates with a PHP API using the Fetch API, while the backend manages game objects and stores the data in a JSON file.

The application is divided into a frontend and a backend. The frontend requests the game list from `api.php` and sends new game information to the same endpoint. The backend processes these requests through the controller and manager classes.

## Objective

The main objective is to display video games with their names and platforms, and to allow users to add new games. The game records are stored in a JSON file instead of a database.

## Functionality

- **Display games:** When the page loads, JavaScript sends a GET request to the PHP API. The returned game data is used to populate the table.
- **Open the form:** Clicking the **New Game** button makes the game form visible.
- **Enter game information:** The user can enter a game name and select a platform.
- **Cancel entry:** The Cancel button hides the form and resets its fields.
- **Submit a game:** Submitting the form sends the name and platform as JSON in a POST request. The PHP backend creates an ID and saves the new game in the JSON file.
- **Refresh the table:** After the POST request finishes, the frontend requests the game list again.
- **Loading state:** The Save button is disabled and its text changes to `Saving...` while the submission is in progress.

The table also displays Edit and Delete buttons, but those buttons do not currently have implemented actions. The current POST endpoint does not return a JSON response, although the frontend attempts to parse the response as JSON. The success notification code also contains a JavaScript issue, so that notification is not currently reliable.

## Technologies

### Frontend

- **HTML5:** Defines the page structure, form, and games table.
- **JavaScript:** Handles user interactions, updates the table, and communicates with the backend.
- **Fetch API:** Sends GET and POST HTTP requests to the PHP endpoint.
- **Tailwind CSS (CDN):** Provides utility classes for the page layout and styling.

### Backend

- **PHP:** Handles API requests and game data operations.
- **PHP classes:** Separates the game model, data management, and request handling.
- **JSON:** Stores the game records in `games.json`.

## Development Steps

1. Created the frontend page structure, including the games table and the hidden form for adding a game.
2. Added Tailwind CSS utility classes to style the administration interface.
3. Added JavaScript references to the form, buttons, table body, and PHP API endpoint.
4. Implemented the frontend GET request to retrieve games and insert them into the table.
5. Created the `Game` class to represent a game with an ID, name, and platform.
6. Implemented the `gameManager` class to read game records from the JSON file, create game objects, and save new records.
7. Implemented the `gameController` class to handle GET and POST requests.
8. Created `api.php` as the API entry point and connected it to the controller.
9. Added the frontend POST request to send new game information as JSON.
10. Added form visibility controls, form reset behavior, and a loading state for the Save button.

## Task List

- [x] Create the HTML page structure.
- [x] Style the interface with Tailwind CSS.
- [x] Create the game form and games table.
- [x] Implement the JavaScript GET request.
- [x] Display the retrieved games in the table.
- [x] Create the `Game` class.
- [x] Implement JSON file reading and writing in `gameManager`.
- [x] Implement GET and POST request handling in `gameController`.
- [x] Create the PHP API entry point.
- [x] Send new game information from JavaScript using a POST request.
- [x] Generate a new ID for each submitted game in the backend.
- [x] Add form show, cancel, and reset interactions.
- [x] Add a loading state to the Save button.
- [ ] Implement the Edit action.
- [ ] Implement the Delete action.
- [ ] Return a valid JSON response from the POST endpoint and handle it correctly in the frontend.
- [ ] Fix and verify the success notification behavior.
- [ ] Add consistent error handling for failed GET and POST requests.

## Architecture

| Component | Responsibility |
|---|---|
| `frontend/index.html` | Defines the administration page, navigation, game form, games table, and Tailwind CSS configuration. It loads `main.js`. |
| `frontend/main.js` | Handles page interactions, retrieves and displays games, submits new game data, and manages the form and loading state. |
| `backend/api.php` | Entry point for API requests. It loads `gameController.php`, sets the JSON content type, and calls the controller. |
| `backend/classes/games.php` | Defines the `Game` class and its public `id`, `name`, and `platform` properties. |
| `backend/classes/gameManager.php` | Reads game data from `games.json`, converts records into `Game` objects, and appends new games to the JSON file. |
| `backend/classes/gameController.php` | Checks the HTTP request method. It returns game data for GET requests and creates and saves a game for POST requests. |
| `backend/data/games.json` | Stores the game records as JSON data. |

## Code Example

The following code is taken from `backend/classes/gameController.php`. It shows how the controller handles a POST request, generates an ID, creates a `Game` object, and sends it to the manager for storage.

```php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $rawNew = file_get_contents("php://input");
    $new = json_decode($rawNew, true);
    $new['id'] = $this->manager->getall() === [] ? 1 : max(array_column($this->manager->getall(), "id")) + 1;
    $game = new Game($new['id'], $new['name'], $new['platform']);
    $this->manager->save($game);
}
```

The request body is read from `php://input` and decoded from JSON into an associative array. The controller then assigns the next ID and passes the new game object to `gameManager` for saving.

## Resources

- [Project source code on GitHub](https://github.com/El-Morabiti-Ahmed/Technical-Projects)
- [Frontend HTML](frontend/index.html)
- [Frontend JavaScript](frontend/main.js)
- [Backend API](backend/api.php)
- [Backend classes](backend/classes/)
- [JSON data file](backend/data/games.json)

No separate screenshots were included in the supplied project archive.

## Conclusion

This project demonstrates how a frontend can communicate with a PHP backend through HTTP requests. It provided practice with JavaScript events, the Fetch API, JSON data, PHP classes, basic separation of responsibilities, and file-based data storage. It also highlights areas that still need implementation, such as the Edit and Delete actions and more complete request-response handling.