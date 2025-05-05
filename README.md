### REFER TO REPORTandGUIDE.pdf FOR DETAILED INSTRUCTIONS REGARDING PROJECT ###
📌 Project Overview --<br>
The goal of this project is to develop a secure user login and management system that leverages AWS Cognito for authentication and identity management, while deploying the application on a LAMP-based EC2 instance. The system supports OAuth2-based login via Hosted UI, captures tokens, and validates user access, making it ideal for scalable and secure web applications.<br>

🚀 Features --
-✅ Secure user registration and login using AWS Cognito. <br>
-🔒 OAuth2.0-based authentication with Hosted UI integration
-🌐 Custom domain setup for public accessibility
-📦 PHP-based frontend for token capture and API integration
-🐧 LAMP stack deployment on Amazon EC2
-🔁 Git configuration for seamless push/pull deployment
-🌍 SSL-enabled domain for encrypted communication

🛠️ Technology Stack
AWS Cognito – Identity and user management
Apache – Web server
MySQL – Database management
PHP – Server-side scripting
Linux (Ubuntu) – Base OS for EC2
Git – Version control and deployment

📂 Project Structure
bash
Copy
Edit
.
├── src/                        # PHP application files
├── public_html/               # Hosted UI redirect target
├── certs/                     # SSL certificates
├── .env                       # Environment variables (Cognito credentials)
├── README.md                  # Project documentation
🔧 Setup Instructions
-Create User Pool on AWS Cognito
-Configure app client
-Enable Hosted UI and set callback/logout URLs
-Set Up LAMP Stack on EC2
-Launch EC2 instance (Ubuntu)
-Install Apache, MySQL, PHP
-Clone and Configure PHP Application
-Clone repo
-Add .env with Cognito credentials and endpoints
-Create a Custom Domain
-Register and point DNS to EC2 instance
-Install SSL using Certbot or manually
-Configure Git Deployment
-Setup SSH for push/pull access
-Automate deployments if needed

🧪 Testing the System
-Open the domain in a browser
-Click Login to initiate Hosted UI redirect
-Authenticate and return to your application
-Capture the token and display user info securely

📈 Future Improvements
-Add session management and logout functionality
-Store tokens securely in session/database
-Integrate multi-factor authentication (MFA)
-Expand to a full user dashboard with roles/permissions

🤝 Contributing
-Feel free to fork this repository and submit a pull request. All contributions are welcome!

📄 License
-This project is licensed under the MIT License.

