import React from "react";
import { DataGrid } from '@mui/x-data-grid';
import 'bootstrap/dist/css/bootstrap.min.css';

const columns = [
  { field: 'id', headerName: 'ID', width: 90 },
  { field: 'id_produit', headerName: 'ID produit', width: 150 },
  { field: 'game', headerName: 'game', width: 150 },
  { field: 'status', headerName: 'Status', width: 150 },
  { field: 'price', headerName: 'Prix', width: 100 },
];

const ListeCommandes = () => {
  const [commandes, setCommandes] = React.useState([]);
  const [search, setSearch] = React.useState("");

  React.useEffect(() => {
    fetch('http://127.0.0.1:8000/sf/commandes')
      .then(response => response.json())
      .then(data => setCommandes(data));
  }, []);

  // Filtrage manuel
  const filteredCommandes = commandes.filter(cmd =>
    String(cmd.id_produit).includes(search) ||
    String(cmd.price).includes(search) ||
    String(cmd.id).includes(search) ||
    String(cmd.game).includes(search) ||
    String(cmd.comment).includes(search)
  );

  return (
    <div className="container m-auto">
      <div className="row m-auto">
        <div className="col-10">
          <h2>Liste des commandes</h2>
          <input
            type="text"
            className="form-control mb-2"
            placeholder="Recherche…"
            value={search}
            onChange={e => setSearch(e.target.value)}
          />
          <DataGrid
            rows={filteredCommandes}
            columns={columns}
            pageSize={5}
            autoHeight
          />
        </div>
      </div>
    </div>
  );
};

export default ListeCommandes;