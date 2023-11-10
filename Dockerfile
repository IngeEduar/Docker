Creación de variables de entorno: 

	ENV variable=valor

Verificar la salud del contenedor:

	HEALTHCHECK --interval=30s --timeout=10s --retries=3 CMD curl -f http://localhost/health || exit 1

Creación del usuario y el grupo

	USER usurio:grupo

Volumenes:

	VOLUME dir/data

CMD y ENTRYPOINT
	
	CMD ["comando", "argumentos"]
	(Usado como el ultimo comando ejecutado)

	ENTRYPOINT ["comando", "argumento"]
	(Usado como el primero comando ejecutado al entrar al contenedor)

	Cuando se usan los dos en el cmd se pueden especificar argumento que pueden ser reemplazados en el comando de run


Dirección de trabajo

	WORKDIR dir/work

Exposición de puertos:

	EXPOSE puerto