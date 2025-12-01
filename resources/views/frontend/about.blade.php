
@extends('layouts.app')
@section('content')
<style>
    .about-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 100px 0;
        text-align: center;
        color: white;
    }
    
    .about-hero h1 {
        font-size: 56px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    
    .about-hero p {
        font-size: 20px;
        opacity: 0.9;
    }
    
    .about-content {
        padding: 80px 0;
    }
    
    .about-image {
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .about-text h2 {
        font-size: 42px;
        color: #2c3e50;
        margin-bottom: 20px;
        font-weight: bold;
    }
    
    .about-text p {
        font-size: 18px;
        color: #7f8c8d;
        line-height: 1.8;
        margin-bottom: 20px;
    }
    
    .features-section {
        background: #f8f9fa;
        padding: 80px 0;
    }
    
    .feature-card {
        background: white;
        padding: 40px;
        border-radius: 15px;
        text-align: center;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .feature-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: white;
        font-size: 40px;
    }
    
    .feature-card h3 {
        font-size: 24px;
        color: #2c3e50;
        margin-bottom: 15px;
        font-weight: bold;
    }
    
    .feature-card p {
        color: #7f8c8d;
        font-size: 16px;
        line-height: 1.6;
    }
    
    .stats-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 80px 0;
        color: white;
    }
    
    .stat-item {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .stat-number {
        font-size: 56px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    .stat-label {
        font-size: 20px;
        opacity: 0.9;
    }
    
    .team-section {
        padding: 80px 0;
    }
    
    .team-member {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .team-image {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        margin: 0 auto 20px;
        border: 5px solid #667eea;
    }
    
    .team-member h4 {
        font-size: 22px;
        color: #2c3e50;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    .team-member p {
        color: #7f8c8d;
        font-size: 16px;
    }
</style>

<!-- Hero Section -->
<div class="about-hero">
    <div class="container">
        <h1>À Propos de Nous</h1>
        <p>Nous sommes dédiés à l'éducation et au développement de chaque enfant</p>
    </div>
</div>

<!-- About Content -->
<div class="about-content">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/about-image.jpg') }}" alt="About Us" class="about-image">
            </div>
            <div class="col-md-6 about-text">
                <h2>Notre Mission</h2>
                <p>Depuis notre création, nous nous engageons à offrir une éducation de qualité qui inspire et prépare les enfants pour un avenir brillant. Notre approche personnalisée permet à chaque élève de développer son plein potentiel.</p>
                <p>Nous croyons en l'apprentissage actif, créatif et joyeux. Notre équipe d'enseignants passionnés crée un environnement stimulant où les enfants peuvent explorer, apprendre et grandir.</p>
                <p>Avec des installations modernes et des programmes innovants, nous offrons une expérience éducative exceptionnelle qui prépare les enfants aux défis du 21ème siècle.</p>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="features-section">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2 style="font-size: 42px; color: #2c3e50; font-weight: bold;">Pourquoi Nous Choisir?</h2>
            <p style="font-size: 18px; color: #7f8c8d;">Les raisons qui font de nous votre meilleur choix</p>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-book"></i>
                    </div>
                    <h3>Programme Enrichi</h3>
                    <p>Des cours variés et adaptés à chaque tranche d'âge pour un apprentissage optimal</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3>Enseignants Qualifiés</h3>
                    <p>Une équipe pédagogique expérimentée et passionnée par l'éducation</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3>Environnement Sûr</h3>
                    <p>Des installations modernes et sécurisées pour le bien-être de vos enfants</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h3>Activités Créatives</h3>
                    <p>Des ateliers artistiques et sportifs pour développer tous les talents</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <h3>Technologie Moderne</h3>
                    <p>Des outils numériques pour une éducation du 21ème siècle</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h3>Suivi Personnalisé</h3>
                    <p>Un accompagnement individuel pour chaque enfant et sa famille</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Élèves Heureux</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Enseignants</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Programmes</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Années d'Expérience</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="team-section">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2 style="font-size: 42px; color: #2c3e50; font-weight: bold;">Notre Équipe</h2>
            <p style="font-size: 18px; color: #7f8c8d;">Rencontrez nos enseignants passionnés</p>
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <div class="team-member">
                    <img src="{{ asset('images/team1.jpg') }}" alt="Team Member" class="team-image">
                    <h4>Marie Dubois</h4>
                    <p>Directrice</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <img src="{{ asset('images/team2.jpg') }}" alt="Team Member" class="team-image">
                    <h4>Jean Martin</h4>
                    <p>Enseignant d'Art</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <img src="{{ asset('images/team3.jpg') }}" alt="Team Member" class="team-image">
                    <h4>Sophie Bernard</h4>
                    <p>Enseignante de Musique</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member">
                    <img src="{{ asset('images/team4.jpg') }}" alt="Team Member" class="team-image">
                    <h4>Pierre Leroy</h4>
                    <p>Coach Sportif</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
