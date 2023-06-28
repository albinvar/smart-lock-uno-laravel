

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/albinvar/smart-lock-uno-laravel">
    <img src="https://i.ibb.co/qFnmJ0z/Brand-initial-Simple-Logo.png alt="Logo" width="260" height="260">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
  </a>
  
  <h3 align="center">💫 🦋 Smart Lock Uno - Web Module 🔐 ✨</h3>
    <h6 align="center">Version 1.0.0 - beta 👨🏻‍💻</h6>

  <p align="center">
    A smart lock system with facial recognition, RFID authentication, and web API control using Arduino Uno and Python
    <br />
    <br />
    <img src="https://img.shields.io/github/issues/albinvar/smart-lock-uno-laravel">
    <img src="https://img.shields.io/github/downloads/albinvar/smart-lock-uno-laravel/total">
    <img src="https://img.shields.io/github/repo-size/albinvar/smart-lock-uno">
    <a href="LICENCE"><img src="https://img.shields.io/github/license/albinvar/smart-lock-uno-laravel"></a>
    <br />
    <br />
    <a href="https://lock.lov3.pw">View Demo</a>
    ·
    <a href="https://github.com/albinvar/smart-lock-uno-laravel/issues">Report Bug</a>
    ·
    <a href="https://github.com/albinvar/smart-lock-uno-laravel/issues">Request Feature</a>
  </p>
</div>

> Warning ⚠️ : The project is still in its beta phase.

<!-- TABLE OF CONTENTS -->
## Table of contents 🌈
  <ol>
    <li>
      <a href="#about-the-project-">About The Project</a>
    </li>
    <li><a href="#prerequistites-">Prerequisites</a></li>
    <li>
      <a href="#features-">Features</a>
    </li>
    <li><a href="#installation-%EF%B8%8F">Installation</a></li>
    <li><a href="#usage-">Usage</a></li>
    <li><a href="#explanation-">Explanation</a></li>
    <li><a href="#contributing-">Contributing</a></li>
    <li><a href="#license-">License</a></li>
    <li><a href="#contact-">Contact</a></li>
    <li><a href="#acknowledgments-">Acknowledgments</a></li>
  </ol>
  
 ##  Introduction
 
 🔒 The Smart Lock Uno Web Module is a simple and intuitive web interface designed to control and manage a smart lock system with multiple authentication methods. 

This module is an integral part of the [smart-lock-uno](https://github.com/albinvar/smart-lock-uno), offering a user-friendly web interface for controlling and managing a smart lock system. 

💻 Built on Laravel 10  🦄, It integrates with the project's web API to provide features such as lock and unlock functionality and intruder detection image display. The module utilizes Laravel Livewire for real-time page updates and Laravel Jetstream for rapid development. For installation and usage instructions, refer to the project's documentation.

## Features ✨

✨ The Smart Lock Web Module offers the following features:

- **⚙️ Built on Laravel 10:** The web module is developed using Laravel 10, the latest version of the popular PHP framework. Laravel 10 brings numerous enhancements, improved performance, and added features, making it a reliable choice for building smart lock systems.

-  **🔗 Web API Integration:** The module integrates with a web API provided by the [smart lock system](https://github.com/albinvar/smart-lock-uno) to control and monitor the lock.

- **🔄 Real-time Page Updates:** Leveraging Laravel Livewire, the web module provides real-time page updates, ensuring a seamless user experience.

- **🔒 Lock and Unlock:** Users can remotely lock and unlock the smart lock through the web interface.

- **📸 Intruder Detection:** The web module displays pictures of intruders captured by the [smart lock system](https://github.com/albinvar/smart-lock-uno), providing visual evidence of unauthorized access attempts.

- **🚀 Laravel Jetstream Integration:** The project utilizes Laravel Jetstream to simplify development and streamline processes, with much secure authentication and simplicity.

### Prerequisites  📋
Before setting up the Smart Lock Web Module, ensure you have the following:

- php 8.1+
- composer 2.0 +
- [smart-lock-uno](https://github.com/albinvar/smart-lock-uno) installed and configured properly.

## Installation ⚙️

Follow these steps to set up the Smart Lock Web Module:

 - Clone the repository:
```bash
git clone https://github.com/your/repository.git
```

- Install the dependencies:
```bash
cd smart-lock-web-module
composer install
```

- Install Node dependencies:
```bash
#using npm
npm install 📦
#using yarn (recommended)
yarn install 🧶
#using pnpm
pnpm install 🍭
```


- Configure the environment variables:
```bash
cp .env.example .env
```

- Generate the application key:
```bash
php artisan key:generate
```

- Configure the API endpoint for the smart-lock:
```bash
API_ENDPOINT=http://127.0.0.1:5000
```

- Compile your CSS / JavaScript for development and recompile on change. **(for developers)**
```bash
# npm 📦
npm run dev
# yarn 🧶
yarn dev
# pnpm 🍭
pnpm dev
```
OR

- Compile your CSS / JavaScript for production...
```bash
# npm 📦
npm run build
# yarn 🧶
yarn build
# pnpm 🍭
pnpm build
```

- Run the development server:
```bash
php artisan serve
```
- Access the Smart Lock Web Module:
Open a web browser and visit `http://localhost:8000`.

## Usage

### 🔒 Lock and Unlock:

- After accessing the dashboard, you can find controls to lock and unlock the smart lock.
- Click on the respective buttons to perform the desired action.

### 📸 Intruder Detection:

- The web module displays pictures of intruders captured by the smart lock system.
- Navigate to the bottom part to view the images and identify unauthorized access attempts.

## Explanation 👩‍🚀

### Web API (Flask) 🛸

The Web API is an additional authentication method that runs on a separate thread on [smart-lock-uno](https://github.com/albinvar/smart-lock-uno) and uses a Flask-based API. Its codes are located in the `src/website.py` file. The Web API listens actively on a specific port for requests and uses requests to communicate with the API. The Website API is accessible via a local server, but it is recommended to use port forwarding tools like `ngrok` or `cloudflared tunnel` to access it from the wide area network.

The Website API requires a token to authorize each request, ensuring that only authenticated users can access the API. Unlike other authentication methods, the Website API does not have a delay to keep the solenoid lock unlocked. Instead, the lock is enabled only when a specific lock action request is received.

One of the key advantages of the Website API is its ability to serve all the intruder images stored and served through the api. This feature allows users to view images of intruders and take appropriate action, such as notifying law enforcement. Additionally, the Website API provides an easy-to-use interface for interacting with the security system and monitoring its status.

#### API Documentation 📃

The following api endpoints on [smart-lock-uno](https://github.com/albinvar/smart-lock-uno) are used to communicate with the lock mechanism.

> NB: The following API endpoints is being integrated from [smart-lock-uno](https://github.com/albinvar/smart-lock-uno) project.

| HTTP Method | Endpoint | Parameters | Description |
|:------:|:------:|:------:|:------:|
|    `GET`    |    `/ping`    |    *N/A*    |    Checks if the system is up and running.   |
|    `POST`    |    `/lock`    |    - `action` <br> - `password` (if action is unlock)    |    Locks or unlocks the solenoid lock    |
|    `GET`    |    `/intruders`    |    *N/A*    |    Returns a list of images/frames captured for unauthorized persons    |
|    `GET`    |    `/intruders/{filename}`    |    `filename`    |    Returns a specific image    |


## Contributing 🌠

This project is open source and contributions are welcome. To contribute, please fork the repository, make your changes, and submit a pull request.

## License 📃

This project is licensed under the <a href="LICENSE">MIT License</a>. See the LICENSE file for more information.

## Contact 📞

If you have any questions, feedback, or suggestions for this project, please feel free to contact us:

- Name: **Albin Varghese**
- Email: albinvar@pm.me

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/albinvar)

## Acknowledgments 👏

This project was inspired by various smart lock projects available on the internet. Thanks to OpenCV Python and Flask for providing the tools necessary for facial recognition and web API authentication, respectively. Thanks to the Arduino community for providing helpful resources and support for this project. Additionally, thank you to ChatGPT, an AI language model trained by OpenAI, for generating helpful responses and contributing to the development of this project.
