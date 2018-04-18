<?php
$host = "ec2-54-83-204-6.compute-1.amazonaws.com";
$database = "d68qibg32f3fit";
$user = "udrraepvpvfnyx";
$port = "5432";
$password = "3536b8b6b3a5d887eaf7e979a7a0809565036e7a9f7bc0ce008e742cf6a2539c";
$uri = "postgres://udrraepvpvfnyx:3536b8b6b3a5d887eaf7e979a7a0809565036e7a9f7bc0ce008e742cf6a2539c@ec2-54-83-204-6.compute-1.amazonaws.com:5432/d68qibg32f3fit";
$herokuCli = "heroku pg:psql postgresql-cubic-10865 --app protected-stream-34303";
$connectionString = "pgsql:host={$host};port={$port};dbname={$database};user={$user};password={$password}";
