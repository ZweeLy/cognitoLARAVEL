### REFER TO REPORTandGUIDE.pdf FOR DETAILED INSTRUCTIONS REGARDING PROJECT ###<br>
📌 Project Overview --<br>
The goal of this project is to develop a secure user login and management system that leverages AWS Cognito for authentication and identity management, while deploying the application on a LAMP-based EC2 instance. The system supports OAuth2-based login via Hosted UI, captures tokens, and validates user access, making it ideal for scalable and secure web applications.<br>

🚀 Features --<br>
-✅ Secure user registration and login using AWS Cognito. <br>
-🔒 OAuth2.0-based authentication with Hosted UI integration. <br>
-🌐 Custom domain setup for public accessibility. <br>
-📦 PHP-based frontend for token capture and API integration. <br>
-🐧 LAMP stack deployment on Amazon EC2. <br>
-🔁 Git configuration for seamless push/pull deployment. <br>
-🌍 SSL-enabled domain for encrypted communication. <br>

🛠️ Technology Stack - <br>
AWS Cognito – Identity and user management. <br>
Apache – Web server. <br>
MySQL – Database management. <br>
PHP – Server-side scripting. <br>
Linux (Ubuntu) – Base OS for EC2. <br>
Git – Version control and deployment. <br>

📂 Project Structure -- <br>
bash <br>
Copy <br> 
Edit <br>
.
├── src/                        # PHP application files <br>
├── public_html/               # Hosted UI redirect target <br>
├── certs/                     # SSL certificates <br>
├── .env                       # Environment variables (Cognito credentials) <br>
├── README.md                  # Project documentation <br> 
<br>
🔧 Setup Instructions <br>
-Create User Pool on AWS Cognito <br>
-Configure app client <br>
-Enable Hosted UI and set callback/logout URLs <br>
-Set Up LAMP Stack on EC2 <br>
-Launch EC2 instance (Ubuntu) <br>
-Install Apache, MySQL, PHP <br>
-Clone and Configure PHP Application <br>
-Clone repo <br>
-Add .env with Cognito credentials and endpoints <br>
-Create a Custom Domain <br>
-Register and point DNS to EC2 instance <br>
-Install SSL using Certbot or manually <br>
-Configure Git Deployment <br>
-Setup SSH for push/pull access <br>
-Automate deployments if needed <br>
<br>
🧪 Testing the System <br>
-Open the domain in a browser <br>
-Click Login to initiate Hosted UI redirect <br>
-Authenticate and return to your application <br>
-Capture the token and display user info securely <br>

📈 Future Improvements <br>
-Add session management and logout functionality <br>
-Store tokens securely in session/database <br>
-Integrate multi-factor authentication (MFA) <br>
-Expand to a full user dashboard with roles/permissions <br>

🤝 Contributing <br> 
-Feel free to fork this repository and submit a pull request. All contributions are welcome! <br>

📄 License<br>
-This project is licensed under the MIT License. <br>

