import LocalizedStrings from 'react-localization';

let strings = new LocalizedStrings({
    sr: {
        base: {
            profile: {
                name: 'Nom',
                surname: 'Prénom',
                email: 'E-Mail',
                username: 'Nom de l\'utilisateur',
                password: 'Mot de passe',
                role: 'Rôle',
                userType: 'Type d\'utilisateur',
            },
            table: {
                actions: 'Actions',
                edit: 'modifier',
                delete: 'supprimer',
            },
            filter: {
                sort: {
                    sortType: 'Type de tri',
                    datetimeDesc: 'Du plus récent au plus ancien',
                    datetimeAsc: 'Du plus ancien au plus récent',
                }
            },
            role: {
                user: 'Utilisateur',
                moderator: 'Modérateur',
                admin: 'Administrateur'
            },
            userType: {
                individual: 'Individuel',
                company: 'Entreprise',
            }
        },
        forms: {
            common: {
                save: 'Sauvegarder',
                login: 'Connexion',
                logout: 'Déconnexion',
                register: 'Inscription',
                thisFieldIsRequired: 'Ce champ est requis',
                emailFormatError: 'Format de l\'adresse e-mail invalide',
                reactApp: 'React-Symfony'
            },
            editUser: {
                title: 'Modifier l\'utilisateur',
            },
            addUser: {
                title: 'Ajouter un utilisateur',
            }
        },
        components: {
            FileUpload: {
                upload: 'Téléverser',
                files: 'Fichiers',
                dragDrop: 'Glissez des fichiers ici ou cliquez pour en sélectionner',
            },
            yesNoDialog: {
                yes: 'Oui',
                no: 'Non',
                confirmDelete: 'Confirmer la suppression',
                confirmDeleteMessage: 'Êtes-vous sûr de vouloir supprimer ce champ ?',
            }
        },
        pages: {
            register: {
                registration: 'Inscription',
                alreadyHaveAccount: 'Vous avez déjà un compte ?'
            },
            login: {
                createNewAccount: 'Créer un nouveau compte',
                wrongUsernameOrPassword: 'Nom d\'utilisateur ou mot de passe incorrect',
            },
            home: {
                title: 'Page d\'accueil',
                welcome: 'Bienvenue sur le site',
            },
            boardUser: {
                title: ''
            },
            boardModerator: {
                title: 'Tableau du modérateur'
            },
            boardAdmin: {
                title: 'Tableau de l\'administrateur'
            },
        }
    }
});

export default strings;
