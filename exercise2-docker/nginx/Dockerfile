# Use the official Nginx image as the base image
FROM nginx:latest

# Copy the nginx.conf file from the host into the container
COPY nginx.conf /etc/nginx/nginx.conf

# Expose ports
EXPOSE 80
EXPOSE 81

# Start Nginx when the container starts
CMD ["nginx", "-g", "daemon off;"]
