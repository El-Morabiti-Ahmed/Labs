## Introduction
My **technical project** is a page with a table of games that is filled with *javascript fetched* data from a JSON file using a *php API*

## Objective
List video games and save them in a JSON file

---

## Functionality
- A form that only appears after the user clicks a button
- A table filled with the names and platform of the games
- A save button that says "Saving..." before the data reaches the JSON
- A toast that informs the user of the state of the operation

## Technologies
- Frontend
    - HTML
    - Tailwind CSS
    - Vanilla Javascript
- Backend
    - Vanilla Object Oriented PHP
    - JSON file

---

## Development steps
1. Create the HTML structure
2. Style the HTML with TailWind CSS
3. Create the 3 PHP classes
    - games.php
    - gameManager.php
    - gameController.php
4. create the API.php
5. create the JavaScript for the *Fetch*

---

## Task List
- [x] Create the Interface
- [x] Create the PHP
- [ ] Create the Javscript

---

## Architecture
| Component | Responsibility |
|---|---|
| games.php | Game entity |
| gameManager.php | Database/Json communicator |
| gameController.php | Data handler |

---

## Code Example
```PHP
class gameManager{
    private static string $JSONfile = __DIR__ . "/../data/games.json";


    public function getall(){
        $rawData = file_get_contents(self::$JSONfile);
        $data = $rawData === null ? [] : json_decode($rawData, true);
        $games = [];

        foreach ($data as $game) {
            $games[] = new Game(
                $game['id'],
                $game['name'],
                $game['platform']
            );
        }
        return $games;
    }

    public function save(Game $game){
        $games = $this->getall();
        $games[] = $game;
        file_put_contents(self::$JSONfile, json_encode($games));
    }

    public function toarray(array $games){
        foreach($games as $game){
            $data = [
                $game->id,
                $game->name,
                $game->platform
            ];
            $game = $data;
        }
        return $games;
    }
}
```

---

## Resources
[Project Source Code](https://github.com/El-Morabiti-Ahmed/Technical-Projects/tree/main/Session%203/Live%20Coding%20Ahmed%20El%20Morabiti)
[Site ScreenShot](images/Site.png)

---

## Conclusion
This project demonstrates how frontend and backend technologies can work together to create a simple application. By using PHP, JavaScript and JSON, it provides a way to manage and display video game data without requiring a database. It also helped me practice object-oriented programming, API development and asynchronous data fetching.