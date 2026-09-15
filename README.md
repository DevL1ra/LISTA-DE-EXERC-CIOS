# Lista de Exercícios — PHP

Lista de exercícios em PHP cobrindo estruturas condicionais, laços de repetição, vetores e matrizes.

Cada exercício fica em sua própria pasta, com:

- `index.php` — formulário HTML para entrada dos dados
- `processar.php` — lógica PHP e exibição do resultado

## Como executar

É necessário um servidor PHP local (XAMPP, Laragon, WAMP ou `php -S`).

Exemplo com o servidor embutido do PHP:

```bash
php -S localhost:8000
```

Depois acesse no navegador, por exemplo:

- http://localhost:8000/exercicio1/
- http://localhost:8000/exercicio2/

## Estrutura

```
LISTA-DE-EXERC-CIOS/
├── exercicio0/   # Exemplo inicial (média da turma)
├── exercicio1/   # Cálculo de desconto em compra
├── exercicio2/   # Classificação de triângulos
├── exercicio3/   # Cálculo de IMC
├── exercicio4/   # Tabuada personalizada
├── exercicio5/   # Juros compostos
├── exercicio6/   # Estatística de alturas
├── exercicio7/   # Média e aprovação
├── exercicio8/   # Faturamento diário
├── exercicio9/   # Tabela de notas (matriz)
└── exercicio10/  # Soma da diagonal principal
```

## Exercícios

### Exercício 0 — Lançamento de Notas da Turma
Recebe as notas de 5 alunos, calcula a média geral e quantos ficaram acima da média.

### Exercício 1 — Cálculo de Desconto em Compra
Recebe o valor da compra e o código do cliente (1 Comum, 2 VIP, 3 Funcionário).  
Aplica desconto de 5%, 10% ou 15% e exibe o valor do desconto e o valor final.

### Exercício 2 — Classificação de Triângulos
Recebe três lados, valida se formam um triângulo e classifica em Equilátero, Isósceles ou Escaleno.

### Exercício 3 — Cálculo de IMC com Categoria
Calcula o IMC (`peso / altura²`) e classifica em:
- Abaixo do peso (IMC < 18,5)
- Peso normal (18,5 ≤ IMC < 25)
- Sobrepeso (25 ≤ IMC < 30)
- Obesidade (IMC ≥ 30)

### Exercício 4 — Tabuada Personalizada
Recebe um número inteiro e exibe a tabuada do 1 ao 10 com `for` (ex.: `5 x 1 = 5`).

### Exercício 5 — Cálculo de Juros Compostos
Simula R$ 1.000,00 a 1,5% ao mês durante 12 meses, mostrando o rendimento mês a mês e o saldo final.

### Exercício 6 — Estatística de Alturas
Processa idade e altura de 10 pessoas e exibe:
- maior e menor altura
- média de altura das pessoas com mais de 18 anos

### Exercício 7 — Calculadora de Média e Aprovação
Armazena 4 notas em um array, calcula a média e define a situação:
- Aprovado (média ≥ 7)
- Recuperação (média entre 5 e 6,9)
- Reprovado (média < 5)

### Exercício 8 — Análise de Faturamento Diário
Recebe as vendas de 7 dias e identifica:
- total vendido na semana
- dia com maior faturamento
- quantos dias ficaram acima da média

### Exercício 9 — Tabela de Notas de uma Turma
Monta uma matriz 3×3 com nome e 2 notas de 3 alunos. Usa laços aninhados para calcular e exibir a média individual.

### Exercício 10 — Soma da Diagonal Principal
Gera uma matriz 3×3 com números aleatórios e soma os elementos da diagonal principal (onde linha = coluna).

## Conteúdos trabalhados

- Estruturas condicionais (`if` / `else` / `switch`)
- Laços de repetição (`for` / `while` / `foreach`)
- Arrays unidimensionais (vetores)
- Arrays bidimensionais (matrizes)
- Formulários HTML com método `POST`
