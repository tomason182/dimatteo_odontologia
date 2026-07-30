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

function router(string $page, array $params = []): string
{
  $query = http_build_query(
    array_merge(["page" => $page], $params)
  );

  return "/?" . $query;
}
