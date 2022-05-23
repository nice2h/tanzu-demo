K8s install on Mac : Ref https://zenn.dev/gekal/articles/minikube-on-mac-as-local-k8s-env

-   brew install minikube
-   brew install kubernetes-cli
-   minikube start --cpus 2 --memory 4096
-   minikube status
-   minikube dashboard

Installation Tanzu Community Edition : Ref https://ik.am/entries/670

-   https://tanzucommunityedition.io/download/
-   tar xzvf ~/Downloads/tce-darwin-amd64-v0.9.1.tar.gz
-   cd tce-darwin-amd64-v0.9.1
-   ./install.sh
-   tanzu version
-   brew tap vmware-tanzu/carvel
-   brew install kctrl
-   kapp version
    https://carvel.dev/kapp-controller/docs/v0.34.0/install/

    Prerequistiqs Carvvel installation

-   brew tap vmware-tanzu/carvel
-   brew install ytt kbld kapp imgpkg kwt vendir
-   download kp from https://docs.vmware.com/en/Tanzu-Build-Service/1.2/vmware-tanzu-build-service-v12/GUID-installing.html
-   place & rename kp-darwin to kp on /usr/local/bin
-   chmod +x kp

Installation TBS : Ref https://blogs.vmware.com/vmware-japan/2021/08/tanzu-build-service-1-2-1-install.html on docker-hub

-   docker login registry.tanzu.vmware.com
-   imgpkg copy -b "registry.pivotal.io/build-service/bundle:<TBS-VERSION>" --to-repo <IMAGE-REPOSITORY>
-   option) minikube
    -   minikube status
    -   minikube start
-   tanzu package repository add tbs-repository \
     --url <IMAGE-REPOSITORY>:<TBS-VERSION> \
     --namespace tbs-install
-   https://blogchobichobi.blogspot.com/2021/03/posts-8.html
    kp image create spring-music --tag nice2h/spring-music --git "https://github.com/cloudfoundry-samples/spring-music" --git-revision master --wait
