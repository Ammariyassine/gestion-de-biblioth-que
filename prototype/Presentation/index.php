<?php
require("./BookPresentation.php");

function askQuestion($question)
{
  echo $question;
  return trim(fgets(STDIN));
}

function library_management()
{
  echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J';
  echo "Welcome to the Books List Manager\n\n";

  $exitProgram = false;
  while (!$exitProgram) {
    echo "+------------------------------------+\n";
    echo "|        Books Management            |\n";
    echo "|------------------------------------|\n";
    echo "|    Please choose an action:        |\n";
    echo "|------------------------------------| \n";
    echo "| [1] - View the Books               |\n";
    echo "| [2] - Add a new Book               |\n";
    echo "| [3] - Exit the program          |\n";
    echo "+------------------------------------+\n\n";

    $action = askQuestion("Your choice: ");
    switch (strtolower($action)) {
      case 1:
        $bookPresentation = new BookPresentation();
        $bookPresentation->viewBooks();
        break;

      case 2:
        $bookPresentation = new BookPresentation();
        $bookPresentation->addBook();
        break;

      case 3:
        $exitProgram = true;
        break;

      default:
        echo "Invalid choice. Please try again.\n";
        break;
    }
  }
  echo "Exiting the program. Goodbye!\n";
}

library_management();
