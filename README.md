pthreads-example

docker build -t pthreads .

docker run -it --rm -v $PWD:/usr/src/example -w /usr/src/example pthreads php index.php