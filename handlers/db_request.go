package handler

import (
	req "alu/database"
	mod "alu/models"
	"encoding/json"
	"fmt"
	"net/http"
)

func getClient() {
	var clients []mod.Client
	var w http.ResponseWriter

	for req.Client().Next() {
		var client mod.Client
		err := req.Client().Scan(&client.ID, &client.Nom, &client.Prenom, &client.Adresse, &client.Telephone)
		if err != nil {
			fmt.Println("Erreur scan résultat:", err)
			http.Error(w, "Erreur interne", http.StatusInternalServerError)
			return
		}
		clients = append(clients, client)
	}

	jsonResponse, err := json.Marshal(clients)
	if err != nil {
		fmt.Println("Erreur conversion", err)
		http.Error(w, "Erreur interne", http.StatusInternalServerError)
		return
	}

	w.Header().Set("Content-Type", "application/json")
	w.Write(jsonResponse)
}
