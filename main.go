package main

import (
	hand "alu/handlers"
	"fmt"
	"net/http"
)

func main() {
	http.HandleFunc("/", hand.Home)

	fmt.Println("Connect to http://localhost:8080")

	err := http.ListenAndServe(":8080", nil)
	if err != nil {
		fmt.Println("Erreur démarrage serveur", err)
	}
}
