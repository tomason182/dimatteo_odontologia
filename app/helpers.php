<?php

function route(string $page): string
{
  return "/?page=" . urldecode($page);
}

function isActive(string $route): string
{
  global $page;

  return $page === $route ? "active" : "";
}
