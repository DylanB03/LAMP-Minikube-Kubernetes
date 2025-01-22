# LAMP-Minikube-Kubernetes
Local kubernetes deployment of a LAMP stack using minikube and docker

Setup Instructions

1. Have Minikube, kubectl, wsl, and docker installed

2. In your IDE terminal:
   ```
   minikube start
   ```
   This will launch minicube. If you have launched minikube in the past you must run the following code before minikube start:
   ```
   minikube delete
   ```

3. In the kustomization.yaml file, you can edit the password to be anything you want

4. Enter:
   ```
   minikube apply -k ./
   ```
5. Open a new terminal. To mount your files for your application, containing your index.php others, enter:
   ```
   minikube mount /ABSOLUTEDIRECTORYOFYOURFOLDER/LAMP-Minikube-Kubernetes:/mnt/data
   ```
6. Enter a bash terminal
   ```
   bash
   ```
   ```
   eval $(minikube docker-env)
   docker build -t projects-webapp .
   ```
7. You can verify the docker build worked by checking for projects-webapp in:
   ```
   docker images
   ```
8. Exit bash
   ```
   exit
   ```
9. Apply changes:
    ```
    kubectl apply -f lamp.yaml
    kubectl apply -k ./
    ```
10. Verify your pods are running:
    ```
    kubectl get pods
    ```
11. Launch the local LAMP service:
    ```
    minikube service lamp
    ```
12. Congratulations, you have a working LAMP stack using kubernetes with 1 node and 2 pods. The contents of the /files folder should be your individual application. Off download, it will contain my own web app but you should change it to your own.
