<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
        }
        
        .dashboard-container {
            width: 90%;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        header {
            background: linear-gradient(to right, #ff6b6b, #ff8e53);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }
        
        .welcome-text {
            font-size: 2.8rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 10px;
        }
        
        .pokemon-display {
            padding: 30px;
        }
        
        .pokemon-image-container {
            width: 300px;
            height: 300px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border: 8px solid #ffde00;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .pokemon-image {
            width: 90%;
            height: 90%;
            object-fit: contain;
            filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.3));
        }
        
        .pokemon-name {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .pokemon-type {
            display: inline-block;
            padding: 8px 25px;
            border-radius: 30px;
            background: #3498db;
            color: white;
            font-size: 1.2rem;
            margin-bottom: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .pokemon-description {
            max-width: 600px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }
        
        .stats {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .stat {
            text-align: center;
            background: #f8f9fa;
            padding: 15px 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            min-width: 120px;
        }
        
        .stat-value {
            font-size: 1.8rem;
            font-weight: bold;
            color: #2c3e50;
        }
        
        .stat-name {
            font-size: 0.9rem;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .logout-btn {
            display: inline-block;
            margin: 20px auto 40px;
            padding: 15px 40px;
            background: linear-gradient(to right, #ff6b6b, #ff8e53);
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }
        
        .logout-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.6);
        }
        
        .pikachu-animation {
            font-size: 3rem;
            margin-top: 20px;
            animation: bounce 2s infinite;
            color: #ffde00;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        @media (max-width: 768px) {
            .welcome-text {
                font-size: 2.2rem;
            }
            
            .pokemon-image-container {
                width: 250px;
                height: 250px;
            }
            
            .stats {
                flex-wrap: wrap;
                gap: 15px;
            }
            
            .stat {
                min-width: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1 class="welcome-text">Hello SaiNoomKhay!</h1>
            <p class="subtitle">Your Favorite Pokemon</p>
            <div class="pikachu-animation">
                <i class="fas fa-bolt"></i>
            </div>
        </header>
        
        <div class="pokemon-display">
            <div class="pokemon-image-container">
                <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png" alt="Pikachu" class="pokemon-image">
            </div>
            
            <h2 class="pokemon-name">Pikachu</h2>
            <span class="pokemon-type">Electric</span>
            
            <p class="pokemon-description">
                Pikachu is an Electric-type Pokémon known for its lightning-fast speed and powerful electric attacks. 
                When several of these Pokémon gather, their electricity could build and cause lightning storms.
            </p>
            
            <div class="stats">
                <div class="stat">
                    <div class="stat-value">55</div>
                    <div class="stat-name">ATTACK</div>
                </div>
                <div class="stat">
                    <div class="stat-value">40</div>
                    <div class="stat-name">DEFENSE</div>
                </div>
                <div class="stat">
                    <div class="stat-value">90</div>
                    <div class="stat-name">SPEED</div>
                </div>
                <div class="stat">
                    <div class="stat-value">50</div>
                    <div class="stat-name">HP</div>
                </div>
            </div>
            
            <button class="logout-btn">Logout</button>
        </div>
    </div>

    <script>
        // Simple animation for the page load
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.dashboard-container');
            container.style.opacity = '0';
            container.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                container.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>