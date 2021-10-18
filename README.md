# Bacciotti Bike Shop Simple Page
Little project I made to calculate the price of bike insurance based on its value.

## Requirements / Tested on
![Bootstrap4.3.1](https://img.shields.io/badge/Bootstrap-4.3.1-green)  
![PHP 7.4](https://img.shields.io/badge/PHP-7.4-blue)  
![jQuery 3.3.1](https://img.shields.io/badge/jQuery-3.3.1-red)

## Installation

- Download the project  
- Put in the public folder of your server (htdoc in XAMPP)
- You must configure a database and set the options in the Conexao.php file
- Run 

## Usage
This is a simple project wich calculates the insurance price based on the parameters set in the "escolha.php" file:  
```
if ($valorBike >= 2000 and $valorBike <= 2500) {
    $arrDados = [
        "argo" => [3, 110, 330],
        "argobasic" => [4, "71,10", "284,40"]
    ];
} elseif ($valorBike > 2501 and $valorBike <= 3000) {
    $arrDados = [
        "argo" => [3, 110, 330],
        "argobasic" => [1, 190, 190]
    ];
} elseif ($valorBike > 3001 and $valorBike <= 3500) {
    $arrDados = [
        "argo" => [3, 110, 330],
        "argobasic" => [4, "71,10", "284,40"]
    ];
} elseif ($valorBike > 3501 and $valorBike <= 4000) {
    $arrDados = [
        "argo" => [3, 126, 378],
        "argobasic" => [5, "65,02", "325,10"]
    ];
} elseif ($valorBike > 4001 and $valorBike <= 4500) {
    $arrDados = [
        "argo" => [4, 103, 412],
        "argobasic" => [6, "60,83", "364,98"]
    ];
} elseif ($valorBike > 4501 and $valorBike <= 5000) {
    $arrDados = [
        "argo" => [4, 113, 452],
        "argobasic" => ["--", "--", "--"]
    ];
} elseif ($valorBike > 5001 and $valorBike <= 5500) {
    $arrDados = [
        "argo" => [5, 100, 500],
        "argobasic" => ["--", "--", "--"]
    ];
} else {
    $arrDados = [
        "argo" => [5, 109, 545],
        "argobasic" => ["--", "--", "--"]
    ];
}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Support and Contact
Feel free to contact me on [Twitter](twitter.com/baciotti).

## License
[MIT](https://choosealicense.com/licenses/mit/)

## Badges
![GitHub followers](https://img.shields.io/github/followers/bacciotti?style=social)  
![Twitter Follow](https://img.shields.io/twitter/follow/baciotti?style=social)

