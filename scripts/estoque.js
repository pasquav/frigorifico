var codigoDoBoi;
var valorPagoPorKilo;
var pesoDoBoi;
var valorPosTriagem;
var lucroPorAnimal;
var sql = "INSERT INTO estoque (codigoDoBoi, valorPagoPorKilo, pesoDoBoi, valorPosTriagem, lucroPorAnimal) VALUES ('" + codigoDoBoi + "', '" + valorPagoPorKilo + "', '" + pesoDoBoi + "', '" + valorPosTriagem + "', '" + lucroPorAnimal + "')";

      $("#table").append("<tr><td>" + boi.codigoDoBoi + "</td><td>" + boi.valorPagoPorKilo + "</td></td>" + boi.pesoDoBoi + "</td></td>" + boi.valorPosTriagem + "</td></td>" + boi.lucroPorAnimal + "</td></tr>");
