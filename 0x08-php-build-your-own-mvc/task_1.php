<?php
/**
 * Task 1: Request and Response Objects
 *
 * Laravel wraps every HTTP request in an Illuminate\Http\Request object.
 * Build your own versions.
 *
 * Requirements:
 * class Request {
 *   private array $query;      // GET params
 *   private array $body;       // POST/PUT body (JSON decoded)
 *   private array $headers;
 *   private string $method;
 *   private string $path;
 *   private array $params;     // route params like {id}
 *   private array $files;
 *
 *   public static function capture(): static — builds from $_SERVER, $_GET, php://input
 *   public function method(): string
 *   public function path(): string
 *   public function isMethod(string $method): bool
 *   public function query(string $key = null, mixed $default = null): mixed
 *   public function input(string $key = null, mixed $default = null): mixed
 *   public function all(): array — merged query + body
 *   public function only(string ...$keys): array
 *   public function except(string ...$keys): array
 *   public function has(string $key): bool
 *   public function header(string $key, mixed $default = null): mixed
 *   public function bearerToken(): ?string
 *   public function setParam(string $key, mixed $value): void
 *   public function param(string $key): mixed
 *   public function ip(): string
 *   public function isJson(): bool
 *   public function expectsJson(): bool
 * }
 *
 * class Response {
 *   public static function json(mixed $data, int $status = 200, array $headers = []): static
 *   public static function error(string $message, int $status = 400): static
 *   public static function notFound(string $message = "Not Found"): static
 *   public static function unauthorized(): static
 *   public static function noContent(): static
 *   public function withHeader(string $key, string $value): static
 *   public function send(): void — outputs headers and body, exits
 * }
 */

// Your solution below.
