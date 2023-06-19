# Base image
FROM node:16-alpine

# Set working directory
WORKDIR /src

# Copy package.json and package-lock.json
COPY package*.json ./

# Install app dependencies
RUN npm install

# Copy app files
COPY . .

# Build the app
RUN yarn build

# Set environment variable
ENV REACT_APP_API_URL=http://your-api-url

# Expose the port
EXPOSE 3000

# Run the app
CMD ["yarn", "dev"]