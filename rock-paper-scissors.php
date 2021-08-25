<?php

    $options = ["Rock", "Paper", "Scissors"];
    $computer = $options[rand(0, 2)];

    foreach ($options as $index => $option) {
        echo "$index | $option\n";
    }

    $selection = readline("Pick your option: ");
    $selection = $options[$selection];

    $isPromptActive = true;
    while($isPromptActive){
        $selection > 2 || $selection < 0 ? $selection = readline("Try again: ") : $isPromptActive = false;
    }

    function findWinner(string $selection, string $computer): string {
        switch(true){
            case $selection === $computer:
                return "It's a tie";
            case $selection === "Rock" && $computer === "Paper" ||
                 $selection === "Paper" && $computer === "Scissors" ||
                 $selection === "Scissors" && $computer === "Rock":
                return "Computer wins!";
            case $selection === "Rock" && $computer === "Scissors" ||
                 $selection === "Paper" && $computer === "Rock" ||
                 $selection === "Scissors" && $computer === "Paper":
                return "You win!";
        }
        return "Something went wrong!";
    }

    echo "You chose: $selection\n";
    echo "Computer chose: $computer\n";

    echo findWinner($selection, $computer);
