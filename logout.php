<?php

setcookie("key", "", time() - 3600);

header('location: ./');