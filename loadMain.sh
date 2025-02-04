echo "launching commands"

. ./execFunctions.sh

callFunction delete start apply

echo "mount in new terminal"
gnome-terminal -- bash -c ". ./execFunctions.sh; mount; exec bash"

gnome-terminal -- bash -c ". ./execFunctions.sh; sleep 10; callFunction images load verify launch; exec bash"


