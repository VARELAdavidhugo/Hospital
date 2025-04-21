README – Projet Hospitalier DevOps
# 🏥 Application Hospitalière – Projet DevOps

## 🎯 Objectif

Déployer une infrastructure complète pour une application hospitalière.  
L'objectif : automatisation, supervision, CI/CD, sécurité.

---

## 🛠️ Stack utilisée

- **Conteneurisation** : Docker, Docker Compose  
- **CI/CD** : Jenkins, GitHub Actions  
- **Automatisation** : Ansible  
- **Base de données** : MariaDB  
- **Web** : PHP, Nginx, Traefik  
- **Supervision** : Prometheus, Grafana  
- **Infrastructure** : Proxmox (multi-VMs Linux Ubuntu)

---

## 🚀 Fonctionnement

1. Création de plusieurs machines virtuelles sous Proxmox
2. Déploiement automatisé via Ansible (app, BDD, monitoring, reverse proxy)
3. Déploiement de l'application avec Docker Compose
4. Mise en place d'une chaîne CI/CD avec Jenkins et GitHub
5. Supervision centralisée Prometheus + Grafana
6. Reverse proxy sécurisé via Traefik

---

## 🧪 Tests réalisés

- Tests de connexion base de données (MariaDB)
- Tests front-end de l'application PHP
- Monitoring CPU/RAM par Prometheus
- Pipeline de déploiement fonctionnel avec Jenkins

---

## 📂 Arborescence conseillée

- `ansible/` : playbooks d’installation automatique  
- `docker/` : docker-compose.yml, Dockerfile  
- `nginx/` : configuration de base  
- `scripts/` : scripts complémentaires  
- `docs/` : captures d'écran et documentation

---

## 📬 Auteur

David Hugo VARELA DURAN  
Administrateur Systèmes DevOps – En formation chez M2i  
[LinkedIn](https://www.linkedin.com/in/david-hugo-varela-duran)  
[GitHub](https://github.com/VARELAdavidhugo/Hospital)

