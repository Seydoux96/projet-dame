package database

import (
	"database/sql"
	"fmt"
)

var db *sql.DB

func init() {
	var err error

	db, err = sql.Open("sqlite3", "alu_base.db")
	if err != nil {
		fmt.Println("Erreur connection base de données:", err)
		return
	}
	defer db.Close()

	err = db.Ping()
	if err != nil {
		fmt.Println("Erreur de ping à la base de données:", err)
		return
	}
}

func Client() *sql.Rows {
	rows, err := db.Query("SELECT * FROM client")

	if err != nil {
		fmt.Println("Erreur requête:", err)
	}
	defer rows.Close()

	return rows
}
