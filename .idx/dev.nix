nix
# This is a basic Nix configuration for a Laravel project with Filament.
# It enables web previews and sets up the necessary services.
{
  pkgs, ...
}:
{
  # Enable web previews
  idx.previews = {
    enable = true;
    previews = [
      {
        # Configure the web preview
        command = ["php", "artisan", "serve", "--host", "0.0.0.0"];
        manager = "web";
        protocol = "http";
        port = 8000;
      }
    ];
  };

  # Define services required for the project
  services.mysql.enable = true; # Example: Enable MySQL database service
  # You might need to add other services here depending on your project's needs
  # services.redis.enable = true; # Example: Enable Redis service

  # Install necessary packages
  environment.systemPackages = with pkgs; [
    php82 # Install PHP
    composer # Install Composer
    nodejs_20 # Install Node.js
    # Add any other required system packages here
  ];

  # Set environment variables if needed
  # environment.sessionVariables = {
  #   APP_ENV = "development";
  # };
}