<?php

function getCategorias($conexion)
{
  $categorias = [];
  $sqlCategorias = "SELECT * FROM categorias";
  $resultCategorias = $conexion->query($sqlCategorias);
  if ($resultCategorias->num_rows > 0) {
    while ($rowCategorias = $resultCategorias->fetch_assoc()) {
      $categorias[$rowCategorias['nombre']] = [];
      $sqlSubcategorias = "SELECT * FROM subcategorias WHERE categoria = " . $rowCategorias['id'];
      $resultSubcategorias = $conexion->query($sqlSubcategorias);
      while ($rowSubcategorias = $resultSubcategorias->fetch_assoc()) {
        array_push($categorias[$rowCategorias['nombre']], $rowSubcategorias['nombre']);
      }
    }
  }
  return $categorias;
}
