# Use the latest .NET SDK image as the build environment
FROM mcr.microsoft.com/dotnet/sdk:5.0 AS build-env

# Set the working directory in the container
WORKDIR /app

# Copy the project file and restore dependencies
COPY *.csproj ./
RUN dotnet restore

# Copy the remaining source code
COPY . ./

# Build the application
RUN dotnet publish -c Release -o out

# Use the lightweight runtime image for the final stage
FROM mcr.microsoft.com/dotnet/aspnet:5.0

# Set the working directory in the container
WORKDIR /app

# Copy the published app from the build environment
COPY --from=build-env /app/out .

# Expose port 81 to the outside world
EXPOSE 81

# Define the command to run the application when the container starts
CMD ["dotnet", "dotnet_hello_world.dll"]
