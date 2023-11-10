FROM maven:3.8.4-openjdk-11-slim AS builder

WORKDIR /sigeliFesc/

COPY /sigeliFesc/pom.xml pom.xml

RUN mvn dependency:go-offline

COPY /sigeliFesc/src/ src/

RUN mvn package -DskipTests

FROM adoptopenjdk:11-jre-hotspot

WORKDIR /sigeliFesc

COPY --from=builder /sigeliFesc/target/sigeliFesc.jar app.jar

EXPOSE 8080

CMD ["java", "-jar", "app.jar"]
