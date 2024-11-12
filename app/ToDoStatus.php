<?php

namespace App;

enum ToDoStatus: int
{
    case New = 0;
    case Done = 1;
    case Archived = 2;
}
