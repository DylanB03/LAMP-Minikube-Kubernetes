delete () {
    echo "deleteing previous minikube"
    cmd.exe /c "minikube delete"
}

start () {
    echo "starting minikube"
    cmd.exe /c "minikube start"
}

apply () {
    echo "applying yaml files and config changes"
    cmd.exe /c "kubectl apply -f lamp.yaml"
    cmd.exe /c "kubectl apply -k ./"
}

mount () {
    cmd.exe /c "minikube mount /Users/dylan/OneDrive/Desktop/LAMP/k8site:/mnt/data"
}

build () {
    eval $(minikube docker-env)
    docker build -t progress-webapp .
}

images () {
    docker images
}

load () {
    cmd.exe /c "minikube image load progress-webapp"
}

verify () {
    temp=$(cmd.exe /c "kubectl get pods --no-headers")
    while [[ $(count "$temp") -lt 2 ]]
    do
    echo "Pods still deploying"
    sleep 2
    temp=$(cmd.exe /c "kubectl get pods --no-headers")
    done
    cmd.exe /c "kubectl get pods"
}

count () {
    #return each index of Running on a new line then count number of lines
    echo "$1" | grep -o "Running" | wc -l
}

launch () {
    cmd.exe /c "minikube service lamp"
}

callFunction () {
    
    for func in "$@"
    do
      $func &
     ID=$!
     wait $ID
     echo "function: $func completed"
    done
}
