<?php

include_once("class.Sudoku.php") ;

/**
 * @author Dick Munroe <munroe@csworks.com>
 * @copyright copyright @ 2005 by Dick Munroe, Cottage Software Works, Inc.
 * @license http://www.csworks.com/publications/ModifiedNetBSD.html
 * @package SudokuExample
 *
 * Generate a puzzle and print the initial position and the solution.
 */

$p = new Sudoku() ;

$theInitialPosition = $p->generatePuzzle() ;

$i = new Sudoku() ;

$i->initializePuzzleFromArray($theInitialPosition) ;

$i->printSolution() ;

$p->printSolution() ;
?>