var contador = 0;
do{
    console.log(contador);
    contador += 1;
} while (contador < 10);
/*
Execute o código no emulador anterior e veja que o resultado é exatamente o mesmo do código usando “while”.

Agora, modifique a última linha do código do laço “do/while” para:

} while (contador < 0);

Execute novamente o código e perceba que apesar da condição nunca ter sido verdadeira,
o bloco de instruções do laço foi executado uma vez.
Essa é a diferença entre o laço “do/while” e o laço “while”.
*/ 