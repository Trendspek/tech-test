# tech-test

Welcome to the Trendspek DevOps Technical Test, Docker component.

# Instructions

Build a Docker container that serves the mini-app in this git repository, and provide HTTP access and SSH access.

When I run this test, I will run:

    docker build -f Dockerfile -t test .
    docker run -p 80:80 test


I will then open http://localhost/index.html in my browser and expect to see the technical test.

### Requirement 1:

Your Dockerfile **must** use a multi-stage build process using appropriate build containers.

### Requirement 2:

Your Docker container **must** contain the files in the `public` directory.

### Requirement 3:
The final container should be running either Nginx or Apache as a web server (whichever you're more familiar with)
The web root should point at `/public` and serve the files generated in the build process.

### Requirement 4:

I want to be able to SSH into the Docker container. Update the Dockerfile accordingly.

----

# Documentation

The below explains how this test application should work.

## Building

In order to run this, you will need to run:
```
    composer install
    composer run-script build
    yarn install
    yarn run build
```


## Testing

To test if this works:

1. Start the server
```
    cd public
    php -S localhost:8000
```

2. View this in your local web browser: http://localhost:8000/index.html
3. This should only be done locally.

## Production

For production, serve this application, use Nginx, Apache.
the web root should point at  `public`
